<?php

namespace App\Http\Controllers;
use App\Models\Prosesbergabung;
use Illuminate\Http\Request;


class ProsesbergabungController extends Controller
{
    public function index()
    {
        return view('prosesbergabung.index');
    }

    public function show($slug)
    {
        return view('prosesbergabung.show');
    }

    public function create()
    {
        return view('admin.prosesbergabung.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'title' => 'required|unique:prosesbergabungs|max:255',
            'content' => 'required',
            'slug' => 'required|unique:prosesbergabungs|max:255',
        ]);

        $prosesbergabung = new Prosesbergabung;

        
        $prosesbergabung->title = $request->title;
        $prosesbergabung->content = $request->content;
        $prosesbergabung->slug = $request->slug;

        $prosesbergabung->save();
    }

    public function edit($id)
    {
        
        $prosesbergabung = Prosesbergabung::find($id);
        return view('admin.prosesbergabung.edit', ['prosesbergabung' => $prosesbergabung]);
        
    
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'title' => 'required|unique:prosesbergabungs,title,'.$id.'|max:255',
            'content' => 'required',
            'slug' => 'required|unique:prosesbergabungs,slug,'.$id.'|max:255',
        ]);

        $prosesbergabung = Prosesbergabung::find($id);

        $prosesbergabung->title = $request->title;
        $prosesbergabung->content = $request->content;
        $prosesbergabung->slug = $request->slug;

        $prosesbergabung->save();

        return redirect('/dashboard/prosesbergabung/'.$prosesbergabung->id.'/edit');
    }

    public function destroy($id)
    {   
        $prosesbergabung = Prosesbergabung::find($id);
        $prosesbergabung->delete();
    }
}
