<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.pages.home');
    }

    public function showAboutUs()
    {
        return view('web.pages.about-us');
    }

    public function showContactUs()
    {
        return view('web.pages.contact-us');
    }

    public function showBlog()
    {
        return view('web.pages.blog');
    }

    public function showBlogDetails()
    {
        return view('web.pages.blog-details');
    }
}
