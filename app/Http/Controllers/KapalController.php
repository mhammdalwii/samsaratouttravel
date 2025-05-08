<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;

class KapalController extends Controller
{
    // Menampilkan daftar kapal
    public function index()
    {
        $kapals = Kapal::all();
        return view('admin.kapal.index', compact('kapals'));
    }

    // Menampilkan form untuk menambahkan kapal
    public function create()
    {
        return view('admin.kapal.create');
    }

    // Menyimpan kapal baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'status' => 'required|string|max:255',
        ]);

        Kapal::create([
            'name' => $request->name,
            'kapasitas' => $request->kapasitas,
            'status' => $request->status,
        ]);

        return redirect()->route('kapal.index')->with('success', 'Kapal berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit kapal
    public function edit($id)
    {
        $kapal = Kapal::findOrFail($id);
        return view('admin.kapal.edit', compact('kapal'));
    }

    // Memperbarui data kapal
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'status' => 'required|string|max:255',
        ]);

        $kapal = Kapal::findOrFail($id);
        $kapal->update([
            'name' => $request->name,
            'kapasitas' => $request->kapasitas,
            'status' => $request->status,
        ]);

        return redirect()->route('kapal.index')->with('success', 'Kapal berhasil diperbarui!');
    }

    // Menghapus kapal
    public function destroy($id)
    {
        Kapal::findOrFail($id)->delete();
        return redirect()->route('kapal.index')->with('success', 'Kapal berhasil dihapus!');
    }
}
