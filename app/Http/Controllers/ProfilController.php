<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return "<h1>Profil Mahasiswa</h1>
                <p>Nama: Muhammad Vallentino Akbar</p>
                <p>NIM: 4124040</p>
                <p>Prodi: Sistem Informasi</p>";
    }
}
