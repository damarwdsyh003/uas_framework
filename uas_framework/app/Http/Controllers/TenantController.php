<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Tenant;
use App\Models\Makanan;
use App\Models\Minuman;
use DB;

class TenantC extends Controller
{
    public function index()
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $tenants = Tenant::all();
        return view('tenant.index', compact('tenants'));
    }

    public function create()
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $makanan = Makanan::all();
        $minuman = Minuman::all();
        return view('tenant.create', compact('makanan', 'minuman'));
    }

    public function store(Request $request)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'nama_tenant' => 'required',
            'id_makanan' => 'required',
            'id_minuman' => 'required',
        ]);

        Tenant::create([
            'nama_tenant' => $request->nama_tenant,
            'id_makanan' => $request->id_makanan,
            'id_minuman' => $request->id_minuman,
        ]);

        return redirect()->route('tenant.index')->with('success', 'Tenant created successfully.');
    }

    public function edit(Tenant $tenant)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $makanan = Makanan::all();
        $minuman = Minuman::all();
        return view('tenant.edit', compact('tenant', 'makanan', 'minuman'));
    }

    public function update(Request $request, Tenant $tenant)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'nama_tenant' => 'required',
            'id_makanan' => 'required',
            'id_minuman' => 'required',
        ]);

        $tenant->update([
            'nama_tenant' => $request->nama_tenant,
            'id_makanan' => $request->id_makanan,
            'id_minuman' => $request->id_minuman,
        ]);

        return redirect()->route('tenant.index')->with('success', 'Tenant updated successfully.');
    }

    public function destroy(Tenant $tenant)
    {
        // Memastikan hanya pengguna dengan role "staf" yang dapat mengakses
        if (Auth::user()->role !== 'staf') {
            abort(403, 'Unauthorized');
        }

        $tenant->delete();
        return redirect()->route('tenant.index')->with('success', 'Tenant deleted successfully.');
    }
}
