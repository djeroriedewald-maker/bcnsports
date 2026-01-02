<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function prijzen()
    {
        return view('pages.prijzen');
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

        // Here you could send an email or store in database
        // For now, we just redirect with success message

        return redirect()->route('contact')->with('success', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.');
    }

    public function overOns()
    {
        return view('pages.over-ons');
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
