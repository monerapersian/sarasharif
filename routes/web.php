<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SaraInformationController;
use App\Http\Controllers\Admin\ContactMessageController;

use App\Models\Post;
use App\Models\SaraInformation;
use App\Models\Visit;


/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    Visit::create([
        'page_type'  => 'home',
        'post_id'    => null,
        'ip_address' => request()->ip(),
    ]);

    $sara = SaraInformation::first();

    $featuredPosts = Post::with('categories')
        ->where('is_featured', true)
        ->where('status', 'published')
        ->latest()
        ->take(4)
        ->get();

    return view('pages.home', compact(
        'sara',
        'featuredPosts'
    ));

})->name('home');


Route::get('/about', [AboutController::class, 'index'])
    ->name('about');


Route::get('/blog', [BlogController::class, 'index'])
    ->name('blog');


Route::get('/blog/{slug}', [BlogController::class, 'show'])
    ->name('blog.show');


/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


Route::get('/faq', function () {
    return view('pages.faq.index');
})->name('faq');


Route::get('/calculator', function () {

    Visit::create([
        'page_type'  => 'calculator',
        'post_id'    => null,
        'ip_address' => request()->ip(),
    ]);

    return view('pages.calculator.index');

})->name('calculator');


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Dashboard
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/dashboard',
            [DashboardController::class, 'index']
        )->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | Articles Management
        |--------------------------------------------------------------------------
        */

        Route::resource('posts', PostController::class);


        /*
        |--------------------------------------------------------------------------
        | FAQ Management
        |--------------------------------------------------------------------------
        */

        Route::resource('faqs', FaqController::class);


        /*
        |--------------------------------------------------------------------------
        | Contact Messages Management
        |--------------------------------------------------------------------------
        */

        Route::resource('contact-messages', ContactMessageController::class)
            ->only([
                'index',
                'destroy',
            ]);

        Route::patch(
            'contact-messages/{contactMessage}/read',
            [ContactMessageController::class, 'markAsRead']
        )->name('contact-messages.read');


        /*
        |--------------------------------------------------------------------------
        | Sara Information Management
        |--------------------------------------------------------------------------
        */

        Route::get(
            '/sara-information',
            [SaraInformationController::class, 'edit']
        )->name('sara-information.edit');

        Route::put(
            '/sara-information',
            [SaraInformationController::class, 'update']
        )->name('sara-information.update');

    });


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';