<?php
namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = Struktur::all();
        return view('admin.struktur.index', compact('struktur'));
    }

    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jabatan' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        Struktur::create($data);

        return redirect()->route('dashboard.struktur.index')->with('success', 'Struktur created successfully.');

    }

    public function show(Struktur $struktur)
    {
        return view('admin.struktur.show', compact('struktur'));
    }

    public function edit(Struktur $struktur)
    {
        return view('admin.struktur.edit', compact('struktur'));
    }

    public function update(Request $request, Struktur $struktur)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jabatan' => 'required|string|max:255',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $struktur->update($data);

        return redirect()->route('dashboard.struktur.index')->with('success', 'Struktur updated successfully.');
    }

    public function destroy(Struktur $struktur)
    {
        if ($struktur->foto) {
            // \Storage::delete('public/' . $struktur->foto);
        }

        $struktur->delete();

        return redirect()->route('dashboard.struktur.index')->with('success', 'Struktur deleted successfully.');
    }
}
