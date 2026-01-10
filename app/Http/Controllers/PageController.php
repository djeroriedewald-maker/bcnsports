<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\ContactMessage;
use App\Models\Faq;
use App\Models\PricingPackage;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::active()->ordered()->get();
        $packages = PricingPackage::active()->ordered()->take(3)->get();

        return view('pages.home', compact('testimonials', 'packages'));
    }

    public function prijzen()
    {
        $packages = PricingPackage::active()->ordered()->get();
        $faqs = Faq::active()->ordered()->get();

        return view('pages.prijzen', compact('packages', 'faqs'));
    }

    public function rooster()
    {
        return view('pages.rooster');
    }

    public function contact()
    {
        return view('pages.contact');
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

        return redirect()->route('contact')->with('success', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.');
    }

    public function overOns()
    {
        return view('pages.over-ons');
    }

    public function ondernemers()
    {
        return view('pages.ondernemers');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function voorwaarden()
    {
        return view('pages.voorwaarden');
    }
}
