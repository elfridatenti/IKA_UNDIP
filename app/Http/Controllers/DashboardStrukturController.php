<?php

namespace App\Http\Controllers;
use App\Models\Struktur;
use Illuminate\Http\Request;

class DashboardStrukturController extends Controller
{
    public function beranda()
    {
        $struktur = Struktur::latest()->take(3)->get();
        return view('beranda', compact('struktur'));
    }

    public function struktur_index()
    {
        $struktur = Struktur::latest()->get();
        return view('struktur-index', compact('struktur'));
    }

    public function struktur($slug)
    {
        $struktur = Struktur::where('slug', $slug)->firstOrFail();
        return view('struktur', compact('struktur'));
    }
}
