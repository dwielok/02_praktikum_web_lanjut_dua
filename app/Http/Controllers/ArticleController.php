<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id)
    {
        echo "Ini Merupakan Halaman Artikel dengan ID " . $id;
    }
}
