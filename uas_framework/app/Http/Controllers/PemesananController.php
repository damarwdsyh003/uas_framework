<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Makanan;
use App\Models\Minuman;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('pemesanan.index', compact('pemesanan'));
    }

    public function show($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);

        if (!$pemesanan) {
            return response()->json([
                'message' => 'Pemesanan not found.',
            ], 404);
        }

        return response()->json($pemesanan);
    }

    public function showMakanan($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);

        if (!$pemesanan) {
            return response()->json([
                'message' => 'Pemesanan not found.',
            ], 404);
        }

        $makanan = $pemesanan->makanan;

        return response()->json($makanan);
    }

    public function showMinuman($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);

        if (!$pemesanan) {
            return response()->json([
                'message' => 'Pemesanan not found.',
            ], 404);
        }

        $minuman = $pemesanan->minuman;

        return response()->json($minuman);
    }

    public function showUsers($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);

        if (!$pemesanan) {
            return response()->json([
                'message' => 'Pemesanan not found.',
            ], 404);
        }

        $users = $pemesanan->users;

        return response()->json($users);
    }

    // TAMBAH
    public function store(Request $request)
    {
        $request->validate([
            'tgl_pemesanan' => 'required',
            'id_makanan' => 'required|exists:makanan,id_makanan',
            'id_minuman' => 'required|exists:minuman,id_minuman',
            'id_users' => 'required|exists:users,id_users',
        ]);

        Pemesanan::create($request->all());

        return response()->json([
            'message' => 'Pemesanan created successfully.',
        ]);
    }

    // EDIT
    public function update(Request $request, $id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);

        if (!$pemesanan) {
            return response()->json([
                'message' => 'Pemesanan not found.',
            ], 404);
        }

        $request->validate([
            'tgl_pemesanan' => 'required',
            'id_makanan' => 'required|exists:makanan,id_makanan',
            'id_minuman' => 'required|exists:minuman,id_minuman',
            'id_users' => 'required|exists:users,id_users',
        ]);

        $pemesanan->update($request->all());

        return response()->json([
            'message' => 'Pemesanan updated successfully.',
        ]);
    }

    // DELETE
    public function destroy($id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);

        if (!$pemesanan) {
            return response()->json([
                'message' => 'Pemesanan not found.',
            ], 404);
        }

        $pemesanan->delete();

        return response()->json([
            'message' => 'Pemesanan deleted successfully.',
        ]);
    }

    public function addToCart($id_makanan, $id_minuman)
    {   
        // Lakukan penanganan logika untuk menambahkan makanan ke keranjang
        // Misalnya, Anda bisa menyimpan data makanan ke dalam session atau database sesuai kebutuhan aplikasi Anda.

        // Contoh jika menggunakan session:
        $cart = session('cart', []);

        // Cek apakah makanan sudah ada di keranjang
        if (array_key_exists($id_makanan, $cart)) {
            // Jika sudah ada, tambahkan jumlah pesanan makanan
            $cart[$id_makanan]++;
        } else {
            // Jika belum ada, tambahkan makanan ke keranjang dengan jumlah 1
            $cart[$id_makanan] = 1;
        }
        
        if (array_key_exists($id_minuman, $cart)) {
            // Jika sudah ada, tambahkan jumlah pesanan makanan
            $cart[$id_minuman]++;
        } else {
            // Jika belum ada, tambahkan makanan ke keranjang dengan jumlah 1
            $cart[$id_minuman] = 1;
        }

        // Simpan kembali data keranjang ke session
        session(['cart' => $cart]);

        return response()->json([
            'message' => 'Menu berhasil ditambahkan ke keranjang.',
        ]);
    }

    public function showKeranjang()
{
    // Retrieve the cart data from session
    $cart = session('cart', []);

    // Retrieve the makanan details from the database based on the IDs in the cart
    $makananDetails = Makanan::whereIn('id_makanan', array_keys($cart))->get();
    $minumanDetails = Minuman::whereIn('id_minuman', array_keys($cart))->get();

    return view('keranjang', compact('cart', 'makananDetails'));
}

public function keranjang()
{
    $makananDetails = Pemesanan::where('id_users', auth()->user()->id_users)->where('status', 0)->get();
    $minumanDetails = Pemesanan::where('id_users', auth()->user()->id_users)->where('status', 0)->get();
    $makanan = Makanan::all();
    $minuman = Minuman::all();
    $cart = [];
    foreach ($makananDetails as $item) {
        $cart[$item->id_makanan] = isset($cart[$item->id_makanan]) ? $cart[$item->id_makanan] + 1 : 1;
    }
    return view('keranjang', compact('makananDetails', 'makanan', 'cart'));

    foreach ($minumanDetails as $item) {
        $cart[$item->id_minuman] = isset($cart[$item->id_minuman]) ? $cart[$item->id_minuman] + 1 : 1;
    }
    return view('keranjang', compact('minumanDetails', 'minuman', 'cart'));
}


}
