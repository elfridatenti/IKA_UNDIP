<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function beranda()
    {
        $about = About::latest()->take(3)->get();
        return view('beranda', compact('about')); // Mengubah 'about' menjadi 'abouts'
    }

    public function about_index()
    {
        $about = About::latest()->get();
        return view('about-index', compact('about'));
    }
        public function about($slug)
    {
        $about = About::where('slug', $slug)->firstOrFail();
        return view('about', compact('about'));
    }
    public function struktur_index()
    {
        // Logika untuk mengambil data yang diperlukan untuk tampilan struktur
        return view('struktur'); // Pastikan Anda memiliki view bernama 'struktur.blade.php'
    }
    
    
  
   
   
    

}
