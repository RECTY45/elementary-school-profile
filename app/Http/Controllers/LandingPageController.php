<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Models\Extrakulikuler;

class LandingPageController extends Controller
{
    public function index(){
        $news = News::latest()->get();
        $ekskul = Extrakulikuler::latest()->get();
        $school_detail = Contact::first();
        $carousel = Carousel::inRandomOrder()->get();
        $gallery = Gallery::inRandomOrder()->get();

        return view('welcome', compact('news', 'ekskul', 'school_detail', 'carousel', 'gallery'));
    }

    public function newsPage(){
        $school_detail = Contact::first();
        $news = News::latest()->get();
        return view('news', compact('news', 'school_detail'));
    }

    public function contactPage(){
        $contact = Contact::first();
        $news = News::latest()->get();
        $school_detail = Contact::first();
        return view('contact', compact('contact', 'school_detail', 'news'));
    }

    public function ekstrakulikulerPage(){
        $ekstrakulikuler = Extrakulikuler::all();
        $school_detail = Contact::first();
        $news = News::latest()->get();
        return view('ekstrakulikuler', compact('ekstrakulikuler', 'school_detail','news'));
    }

    public function aboutPage(){
        $about = Contact::first()->about;
        $school_detail = Contact::first();
        $news = News::latest()->get();
        return view('about', compact('about', 'school_detail','news'));
    }


}
