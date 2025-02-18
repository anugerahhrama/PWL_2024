<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return '
        Nama: Anugerah Rachmadani S.
        <br>
        NIM: 244107023012
        ';
    }
}
