<?php

namespace App\Http\Controllers;

use App\Helpers\LocaleHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\ContactMessage;
use App\Models\Faq;
use App\Models\PricingPackage;
use App\Models\Testimonial;

class PageController extends Controller
{
    protected function localizedView(string $view, array $data = [])
    {
        if (app()->getLocale() === 'en') {
            $enView = 'pages.en.' . basename($view);
            if (view()->exists($enView)) {
                return view($enView, $data);
            }
        }

        return view('pages.' . $view, $data);
    }

    public function home()
    {
        try {
            $testimonials = Testimonial::active()->ordered()->get();
            $packages = PricingPackage::active()->ordered()->take(3)->get();
        } catch (\Exception $e) {
            \Log::error('Home page database error: ' . $e->getMessage());
            $testimonials = collect([]);
            $packages = collect([]);
        }

        return $this->localizedView('home', compact('testimonials', 'packages'));
    }

    public function prijzen()
    {
        try {
            $packages = PricingPackage::active()->ordered()->get()->groupBy('category');
            $faqs = Faq::active()->ordered()->get();
            $categories = PricingPackage::$categories;
        } catch (\Exception $e) {
            \Log::error('Prijzen page database error: ' . $e->getMessage());
            $packages = collect([]);
            $faqs = collect([]);
            $categories = [];
        }

        return $this->localizedView('prijzen', compact('packages', 'faqs', 'categories'));
    }

    public function rooster()
    {
        return $this->localizedView('rooster');
    }

    public function contact()
    {
        return $this->localizedView('contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:5000',
            'privacy' => 'required|accepted',
        ]);

        // Save to database
        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        // Send email to BCN Sports
        try {
            Mail::to('info@bcnsports.nl')->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            // Email failed but message is saved in database
            \Log::error('Contact form email failed: ' . $e->getMessage());
        }

        $redirectRoute = LocaleHelper::localizedRoute('contact');

        return redirect()->route($redirectRoute)->with('success', __('ui.contact_form.success'));
    }

    public function overOns()
    {
        return $this->localizedView('over-ons');
    }

    public function ondernemers()
    {
        return $this->localizedView('ondernemers');
    }

    public function privacy()
    {
        return $this->localizedView('privacy');
    }

    public function voorwaarden()
    {
        return $this->localizedView('voorwaarden');
    }
}
