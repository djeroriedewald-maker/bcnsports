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
