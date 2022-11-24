<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'render'])->name('home');

Route::get('/about', [HomeController::class,'about'])->name('about');


Route::get('/events', [EventController::class,'list']);

Route::get('/partners', [PartnerController::class,'list']);

Route::get('/project', function () {
    return view('comming');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts',[PostController::class,'list']);

Route::get('/post/{post}', [PostController::class,'show'])->name('article');

Route::post('/newletter', function (Request $request, Newsletter $newsletter) {

    $newsletter->mail = $request->input('email');
    $newsletter->save();

    return back()->with('success', 'Merci de vous être enregistré dans notre newsletter !');
})->name('newsletter');

Route::post('/send/mail', function (Request $request) {
    dd($request);
});

Route::post('/send/comment', function (Request $request) {
    dd($request);
});


Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'save'])->name('contact.store');


Route::get('/link', function () {
    Artisan::call('storage:link');
});
