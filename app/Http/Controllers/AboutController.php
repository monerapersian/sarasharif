<?php

namespace App\Http\Controllers;

use App\Models\SaraInformation;

class AboutController extends Controller
{
    public function index()
    {
        $sara = SaraInformation::first();

        return view('pages.about.index', compact('sara'));
    }
}