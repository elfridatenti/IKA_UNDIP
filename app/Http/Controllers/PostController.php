<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Menampilkan daftar post.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return response()->view('admin.post.index', compact('post'));
    }

    /**
     * Menampilkan form untuk membuat post baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.post.create');
    }

    /**
     * Menyimpan post baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
            'slug' => 'required|unique:posts|max:255',
        ]);

        Post::create($request->all());
        return redirect()->route('dashboard.post.index')->with('success', 'Post berhasil ditambahkan.');
    }

    /**
     * Menampilkan post tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->view('admin.post.show', compact('post'));
    }

    /**
     * Menampilkan form untuk mengedit post tertentu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return response()->view('admin.post.edit', compact('post'));
    }

    /**
     * Memperbarui post tertentu dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255|unique:posts,title,' . $id,
            'content' => 'required',
            'slug' => 'required|max:255|unique:posts,slug,' . $id,
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('dashboard.post.index')->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Menghapus post tertentu dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('dashboard.post.index')->with('success', 'Post berhasil dihapus.');
    }
}
