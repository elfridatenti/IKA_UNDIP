<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Gallery;
use App\Models\GalleryItem;

class DashboardFotoController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.foto.index', [
            'data' => Gallery::where("tipe", "foto")->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.foto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'desk' => 'required',
            'cover' => 'required|image',
        ]);

        $filename = "";

        if ($request->file("cover")) {
            $file = $request->file("cover");
            $filename = time() . "."  . $file->getClientOriginalExtension();
            $file->move("cover/", $filename);
        }

        $gallery = new Gallery;
        $gallery->nama = $request->nama;
        $gallery->desk = $request->desk;
        $gallery->cover = $filename;
        $gallery->tipe = "foto";
        $gallery->save();

        return redirect()->route('dashboard.foto.index')->with("success", "Gallery Foto Berhasil Ditambah!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    public function list($id)
    {
        //
        $data = GalleryItem::where("gallery_id", $id)->latest()->get();

        return view('admin.foto.list', [
            'gallery' => Gallery::find($id),
            'data' => $data,
            'id' => $id,
        ]);
    }

    public function gallery_item_store(Request $request, $id)
    {
        $request->validate([
            'item' => 'required|image',
        ]);

        $galleryItem = new GalleryItem;
        $galleryItem->gallery_id = $id;

        if ($request->file("item")) {
            $file = $request->file("item");
            $filename = time() . "."  . $file->getClientOriginalExtension();
            $file->move("cover/", $filename);
            $galleryItem->item = $filename;
        }

        $galleryItem->save();
        return redirect()->route('dashboard.foto.list.index', $id)->with("success", "Foto Berhasil Diupload!");

    }

    public function gallery_item_destroy(Request $request, $id, $id_item)
    {
        $item = GalleryItem::find($id_item);
        File::delete("cover/" . $item->item);
        $item->delete();

        return redirect()->route('dashboard.foto.list.index', $id)->with("success", "Foto Berhasil Dihapus!");
    }

     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.foto.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validationRules = [
            'nama' => 'required',
            'desk' => 'required',
        ];

        if ($request->file("cover")) {
            $validationRules["cover"] = 'required|image';
        }

        $request->validate($validationRules);

        $gallery = Gallery::find($id);
        $gallery->nama = $request->nama;
        $gallery->desk = $request->desk;

        if ($request->file("cover")) {
            $oldFile = $gallery->cover;
            File::delete("cover/" . $oldFile);

            $file = $request->file("cover");
            $filename = time() . "."  . $file->getClientOriginalExtension();
            $file->move("cover/", $filename);
            $gallery->cover = $filename;
        }

        $gallery->save();

        return redirect()->route('dashboard.foto.index')->with("success", "Gallery Foto Berhasil Diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $oldFile = $gallery->cover;
        File::delete("cover/" . $oldFile);

        $gallery->delete();

        return redirect()->route('dashboard.foto.index')->with("success", "Gallery Foto Berhasil Dihapus!");
    }
}
