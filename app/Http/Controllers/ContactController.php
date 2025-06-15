<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[\p{L}\s]+$/u'],
            'email' => 'required|email|max:255',
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^[0-9+\-\s()]+$/'],
            'message' => 'required|string',
            'lang' => 'required|string',
        ]);

        Mail::to('rjr.eh1996@gmail.com')->send(new ContactFormMail($validated));

        return redirect()->route($validated['lang'] === 'es' ? 'thankyou_es' : 'thankyou_en');
    }
} 