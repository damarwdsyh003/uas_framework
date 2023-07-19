<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Pemesanan;
use App\Models\User;
use Carbon\Carbon;
use DB;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        // return view('pemesanan.index', compact('pemesanan'));
        return response() -> json(['data'=>$pemesanan]);
    }

    public function create()
    {
        $tenant = Tenant::all();
        $users = User::all();
        return view('pemesanan.create', compact('tenant', 'users'));
        $save->tgl_pemesanan = Carbon::now();
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_pemesanan' => 'required',
            'id_tenant' => 'required',
            'id_users' => 'required',
        ]);

        Pemesanan::create([
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'id_tenant' => $request->id_tenant,
            'id_users' => $request->id_users,
        ]);

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan created successfully.');
    }

    public function edit(Pemesanan $pemesanan)
    {
        $tenant = Tenant::all();
        $users = User::all();
        return view('pemesanan.edit', compact('pemesanan', 'tenant', 'users'));
    }

    public function update(Request $request, Pemesanan $pemesanan)
    {
        $request->validate([
            'tgl_pemesanan' => 'required',
            'id_tenant' => 'required',
            'id_users' => 'required',
        ]);

        $pemesanan->update([
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'id_tenant' => $request->id_tenant,
            'id_users' => $request->id_users,
        ]);

        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan updated successfully.');
    }

    public function destroy(Pemesanan $pemesanan)
    {
        $pemesanan->delete();
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan deleted successfully.');
    }
}
