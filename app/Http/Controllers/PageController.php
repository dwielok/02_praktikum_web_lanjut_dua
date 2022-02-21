<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang";
    }

    public function about()
    {
        echo "NIM : 2041720177 ";
        echo "Nama : Dwi Elok Nuraini ";
        echo "Kelas : TI 2D";
    }

    public function articles($id)
    {
        echo "Ini Merupakan Halaman Artikel dengan ID " . $id;
    }
}
