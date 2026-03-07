<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function hewan()
    {
        return "<h1>Katalog Hewan</h1>
                <ul>
                    <li>Singa</li>
                    <li>Gajah</li>
                    <li>Ayam</li>
                    <li>Kucing</li>
                </ul>";
    }

    public function detail($nama)
    {
        return "<h1>Detail Hewan</h1>
                <p>Nama Hewan: $nama</p>";
    }
}
