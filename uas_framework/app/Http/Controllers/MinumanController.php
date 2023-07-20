<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        $minuman = Minuman::all();
        return view('menuminum', compact('minuman'));
    }

    public function show($id_minuman)
    {
        $minuman = Minuman::find($id_minuman);

        if (!$minuman) {
            return response()->json([
                'message' => 'Minuman not found.',
            ], 404);
        }

        return response()->json($minuman);
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use App\models\Minuman;
// use DB;

// class MinumanController extends Controller
// {
//     public function index()
//     {
//         // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
//         if (Auth::user()->role !== 'staf') {
//             abort(403, 'Unauthorized');
//         }

//         $minuman = Minuman::all();
//         return view('minuman.index', compact('minuman'));
//     }

//     public function create()
//     {
//         // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
//         if (Auth::user()->role !== 'staf') {
//             abort(403, 'Unauthorized');
//         }

//         return view('minuman.create');
//     }

//     public function store(Request $request)
//     {
//         // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
//         if (Auth::user()->role !== 'staf') {
//             abort(403, 'Unauthorized');
//         }

//         $request->validate([
//             'nama_minuman' => 'required',
//             'harga_minuman' => 'required|numeric',
//         ]);

//         Minuman::create([
//             'nama_minuman' => $request->nama_minuman,
//             'harga_minuman' => $request->harga_minuman,
//         ]);

//         return redirect()->route('minuman.index')->with('success', 'Minuman created successfully.');
//     }

//     public function edit(Minuman $minuman)
//     {
//         // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
//         if (Auth::user()->role !== 'staf') {
//             abort(403, 'Unauthorized');
//         }

//         return view('minuman.edit', compact('minuman'));
//     }

//     public function update(Request $request, Minuman $minuman)
//     {
//         // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
//         if (Auth::user()->role !== 'staf') {
//             abort(403, 'Unauthorized');
//         }

//         $request->validate([
//             'nama_minuman' => 'required',
//             'harga_minuman' => 'required|numeric',
//         ]);

//         $minuman->update([
//             'nama_minuman' => $request->nama_minuman,
//             'harga_minuman' => $request->harga_minuman,
//         ]);

//         return redirect()->route('minuman.index')->with('success', 'Minuman updated successfully.');
//     }

//     public function destroy(Minuman $minuman)
//     {
//         // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
//         if (Auth::user()->role !== 'staf') {
//             abort(403, 'Unauthorized');
//         }

//         $minuman->delete();
//         return redirect()->route('minuman.index')->with('success', 'Minuman deleted successfully.');
//     }
// }
