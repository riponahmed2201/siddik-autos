<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:120',
            'message' => 'required|string|max:2000',
        ]);

        $inquiry = ContactInquiry::create($validated);

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Thanks! Your message has been received.', 'id' => $inquiry->id], 201);
        }

        return back()->with('success', 'Thanks! Your message has been received.');
    }
}


