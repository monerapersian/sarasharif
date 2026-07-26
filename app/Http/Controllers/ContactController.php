<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\SaraInformation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $sara = SaraInformation::first();

        return view('pages.contact.index', compact('sara'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['required', 'string', 'max:20'],
            'email'   => ['nullable', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        ContactMessage::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'پیام شما با موفقیت ارسال شد. در اولین فرصت با شما تماس خواهیم گرفت.');
    }
}