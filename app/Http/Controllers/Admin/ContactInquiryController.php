<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;

class ContactInquiryController extends Controller
{
    public function index()
    {
        $inquiries = ContactInquiry::latest()->paginate(20);
        return view('admin.contact-inquiries.index', compact('inquiries'));
    }

    public function show(ContactInquiry $contactInquiry)
    {
        $inquiry = $contactInquiry;
        return view('admin.contact-inquiries.show', compact('inquiry'));
    }
}


