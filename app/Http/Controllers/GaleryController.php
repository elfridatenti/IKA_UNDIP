<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery;
use App\Models\GalleryItem;

class GaleryController extends Controller
{
    public function foto(Request $request)
    {   
         return view('foto-index', [
            "data" => Gallery::where("tipe", "foto")->latest()->get(),
        ]);
        
    }

    public function foto_detail(Request $request, $id)
    {   
       return view('foto-list', [
            "gallery" => Gallery::find($id),
            "data" => GalleryItem::where("gallery_id", $id)->get(),
        ]);
    }

    public function video(Request $request)
    {   
         return view('video-index', [
            "data" => Gallery::where("tipe", "video")->latest()->get(),
        ]);
        
    }

    public function video_detail(Request $request, $id)
    {   
       return view('video-list', [
            "gallery" => Gallery::find($id),
            "data" => GalleryItem::where("gallery_id", $id)->get(),
        ]);
    }
}
