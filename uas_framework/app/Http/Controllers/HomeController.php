<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function keranjang()
    {
        // Retrieve the cart data from session
    $cart = session('cart', []);

    // Retrieve the makanan details from the database based on the IDs in the cart
    $makananDetails = Makanan::whereIn('id_makanan', array_keys($cart))->get();

    return view('keranjang', compact('cart', 'makananDetails'));
        
    }

    public function riwayat()
    {
        return view('riwayat');
    }

    public function menumakan()
    {
        return view('menumakan');
    }

    public function menuminum()
    {
        return view('menuminum');
    }
}