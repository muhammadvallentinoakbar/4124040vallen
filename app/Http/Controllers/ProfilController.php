<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Muhammad Vallentino Akbar',
            'nim' => '4124040',
            'prodi' => 'Sistem Informasi',
            'semester' => '4',
            'keahlian' => ['HTML', 'CSS', 'PHP', 'Laravel', 'Database']
        ];

        return view('profil', $data);
    }

    public function show($nim)
    {
        return "Profil mahasiswa dengan NIM: " . $nim;
    }
}