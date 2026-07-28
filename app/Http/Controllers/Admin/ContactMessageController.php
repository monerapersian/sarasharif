<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index(Request $request)
    {
        $messages = ContactMessage::query()

            ->when($request->filled('search'), function ($query) use ($request) {

                $search = $request->search;

                $query->where(function ($q) use ($search) {

                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('subject', 'like', "%{$search}%");

                });

            })

            ->when($request->filled('status'), function ($query) use ($request) {

                if ($request->status === 'read') {
                    $query->where('is_read', true);
                }

                if ($request->status === 'unread') {
                    $query->where('is_read', false);
                }

            })

            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.contact-messages.index', compact('messages'));
    }

    public function markAsRead(ContactMessage $contactMessage)
    {
        if (! $contactMessage->is_read) {

            $contactMessage->update([
                'is_read' => true,
            ]);

        }

        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()
            ->route('admin.contact-messages.index')
            ->with('success', 'پیام با موفقیت حذف شد.');
    }
}