<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\VehicleType;
use App\Models\VehicleCategory;
use App\Models\VehicleFeature;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::with(['category', 'features'])->where('is_active', true)->get();
        $categories = VehicleCategory::where('is_active', true)->get();
        $features = VehicleFeature::where('is_active', true)->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('is_featured', 'desc')->orderBy('created_at', 'desc')->take(3)->get();
        return view('web.pages.home', compact('vehicleTypes', 'categories', 'features', 'testimonials'));
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

    public function showPricing()
    {
        return view('web.pages.pricing');
    }
}
