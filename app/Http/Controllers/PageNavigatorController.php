<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNavigatorController extends Controller
{
    public function viewHome()
    {
        return view('pages.home');
    }

    public function viewFeature()
    {
        return view('pages.feature.index');
    }

    public function viewPricing()
    {
        return view('pages.pricing');
    }

    public function viewBlog()
    {
        return view('pages.blog');
    }

    public function viewAbout()
    {
        return view('pages.about');
    }
}
