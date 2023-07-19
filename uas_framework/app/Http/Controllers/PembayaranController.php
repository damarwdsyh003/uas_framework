<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pemesanan;
use Carbon\Carbon;
use DB;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $pemesanan = Pemesanan::all();
        return view('pembayaran.create', compact('pemesanan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_pemesanan' => 'required',
            'total_harga' => 'required|numeric',
            'id_pemesanan' => 'required',
        ]);

        Pembayaran::create([
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'total_harga' => $request->total_harga,
            'id_pemesanan' => $request->id_pemesanan,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran created successfully.');
    }

    public function edit(Pembayaran $pembayaran)
    {
        $pemesanan = Pemesanan::all();
        return view('pembayaran.edit', compact('pembayaran', 'pemesanan'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'tgl_pemesanan' => 'required',
            'total_harga' => 'required|numeric',
            'id_pemesanan' => 'required',
        ]);

        $pembayaran->update([
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'total_harga' => $request->total_harga,
            'id_pemesanan' => $request->id_pemesanan,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran updated successfully.');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran deleted successfully.');
    }
}
