<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Makanan;

class MakananController extends Controller
{
    public function index()
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $makanan = Makanan::all();
        return view('makanan.index', compact('makanan'));
    }

    public function create()
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        return view('makanan.create');
    }

    public function store(Request $request)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'nama_makanan' => 'required',
            'harga_makanan' => 'required|numeric',
        ]);

        Makanan::create([
            'nama_makanan' => $request->nama_makanan,
            'harga_makanan' => $request->harga_makanan,
        ]);

        return redirect()->route('makanan.index')->with('success', 'Makanan created successfully.');
    }

    public function edit(Makanan $makanan)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        return view('makanan.edit', compact('makanan'));
    }

    public function update(Request $request, Makanan $makanan)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'nama_makanan' => 'required',
            'harga_makanan' => 'required|numeric',
        ]);

        $makanan->update([
            'nama_makanan' => $request->nama_makanan,
            'harga_makanan' => $request->harga_makanan,
        ]);

        return redirect()->route('makanan.index')->with('success', 'Makanan updated successfully.');
    }

    public function destroy(Makanan $makanan)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $makanan->delete();
        return redirect()->route('makanan.index')->with('success', 'Makanan deleted successfully.');
    }
}
