<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\AlumniProfile;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        $news = News::latest()->take(3)->get();
        $alumni = Alumniprofile::latest()->take(3)->get();
        return view('beranda', compact('news', 'alumni'));
    

    }
    
    
    public function news_index()
    {
        $news = News::latest()->get();
        return view('news-index', compact('news'));
    }

    public function news($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news', compact('news'));
    }

    public function manfaat_keanggotaan()
    {
        return view('manfaat-keanggotaan');
    }

        public function about()
    {
       return view('about');
       
    }
    
    public function proses_bergabung()
    {
        return view('prosesbergabung');
    }
    public function contact_index()
    {
        return view('contact');
    }
}