<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
