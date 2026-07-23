<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SaraInformation;
use App\Services\ImageOptimizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaraInformationController extends Controller
{
    protected ImageOptimizer $imageOptimizer;

    public function __construct(ImageOptimizer $imageOptimizer)
    {
        $this->imageOptimizer = $imageOptimizer;
    }

    public function edit()
    {
        $saraInformation = SaraInformation::first();

        if (! $saraInformation) {
            $saraInformation = new SaraInformation();
        }

        return view('admin.sara-information.edit', compact('saraInformation'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'profile_image'        => 'nullable|image|max:10240',

            'goals'                => 'nullable|string|max:255',
            'activities'           => 'nullable|string|max:255',
            'specializations'      => 'nullable|string|max:255',

            'intro_title'          => 'nullable|string|max:255',
            'intro_text'           => 'nullable|string',

            'experience_years'     => 'nullable|integer|min:0|max:100',

            'phone'                => 'nullable|string|max:255',
            'whatsapp'             => 'nullable|string|max:255',
            'instagram_username'   => 'nullable|string|max:255',
            'email'                => 'nullable|email|max:255',
        ]);

        $saraInformation = SaraInformation::first();

        if (! $saraInformation) {
            $saraInformation = new SaraInformation();
        }

        // آپلود تصویر
        if ($request->hasFile('profile_image')) {

            if (
                $saraInformation->profile_image &&
                Storage::disk('public')->exists($saraInformation->profile_image)
            ) {
                Storage::disk('public')->delete($saraInformation->profile_image);
            }

            $validated['profile_image'] = $this->imageOptimizer->optimize(
                $request->file('profile_image'),
                'sara'
            );
        }

        $saraInformation->fill($validated);

        $saraInformation->save();

        return redirect()
            ->route('admin.sara-information.edit')
            ->with('success', 'اطلاعات با موفقیت ذخیره شد.');
    }
}
