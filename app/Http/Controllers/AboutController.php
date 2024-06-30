<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    /**
     * Menampilkan daftar about.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return response()->view('admin.about.index', compact('about'));
    }

    /**
     * Menampilkan form untuk membuat about baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.about.create');
    }

    /**
     * Menyimpan about baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        About::create($request->all());
        return redirect()->route('dashboard.about.index')->with('success', 'About berhasil ditambahkan.');
    }
    /**
     * Menampilkan about tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::findOrFail($id);
        return response()->view('admin.about.show', compact('about'));
    }
    /**
     * Menampilkan form untuk mengedit about tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return response()->view('admin.about.edit', compact('about'));
    }

    /**
     * Memperbarui about tertentu dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $about = About::findOrFail($id);
        $about->update($request->all());
        return redirect()->route('dashboard.about.index')->with('success', 'About berhasil diperbarui.');
    }

       /**
     * Menghapus about tertentu dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();
        return redirect()->route('dashboard.about.index')->with('success', 'About berhasil dihapus.');
    }
}
