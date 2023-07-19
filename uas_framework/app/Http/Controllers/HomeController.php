<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('keranjang');
    }

    public function riwayat()
    {
        return view('riwayat');
    }
}