<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ExtrakulikulerController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::middleware('auth')->group(function(){
    Route::get('/beranda', [DashboardController::class,'index'])->name('home.backend');
    Route::post('/logout', [AuthenticationController::class,'logout'])->name('logout');

    Route::prefix('/profil')->name('profile.')->controller(ProfileController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::put('/{id}', 'update')->name('update');
    });

    Route::prefix('/berita')->name('news.')->controller(NewsController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/sunting/{id}', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('delete');
    });

    Route::prefix('/carousel')->name('carousel.')->controller(CarouselController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/sunting/{id}', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('delete');
    });

    Route::prefix('/extrakulikuler')->name('extrakulikuler.')->controller(ExtrakulikulerController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/sunting/{id}', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('delete');
    });

    Route::prefix('/daftar-kontak')->name('contact.')->controller(ContactController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });

    Route::prefix('/galeri')->name('galeri.')->controller(GalleryController::class)->group(function(){
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::delete('/{id}', 'destroy')->name('delete');
    });
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthenticationController::class, 'index'])->name('view.login');
    Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

    Route::get('/', [LandingPageController::class, 'index'])->name('home.frontend');
    Route::get('/berita-sekolah', [LandingPageController::class, 'newsPage'])->name('news.frontend');
    Route::get('/kontak', [LandingPageController::class, 'contactPage'])->name('contact.frontend');
    Route::get('/ekstrakulikuler', [LandingPageController::class, 'ekstrakulikulerPage'])->name('ekstrakulikuler.frontend');
    Route::get('/tentang-kami', [LandingPageController::class, 'aboutPage'])->name('about.frontend');
});


