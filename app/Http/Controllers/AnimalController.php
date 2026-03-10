<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{

    private $animals = [
        "singa" => "Singa adalah hewan karnivora yang dikenal sebagai “raja hutan”. Singa memiliki tubuh yang kuat, gigi dan cakar yang tajam untuk berburu mangsa. Hewan ini biasanya hidup berkelompok yang disebut dengan pride.
                    Singa banyak ditemukan di wilayah savana dan padang rumput di Afrika. Makanan utama singa adalah daging dari hewan lain seperti zebra, rusa, dan kerbau.",
        "sapi" => "Sapi adalah hewan herbivora yang memakan rumput.",
        "ayam" => "Ayam adalah hewan omnivora yang memakan biji dan serangga.",
        "harimau" => "Harimau adalah hewan karnivora yang sangat kuat.",
        "kambing" => "Kambing adalah hewan herbivora yang sering diternakkan."
    ];

    public function index()
{
    $html = "
    <html>
    <head>
        <title>Daftar Hewan</title>
        <style>
            body{
                font-family: Arial;
                text-align:center;
                padding:40px;
            }

            .box{
                background:white;
                width:300px;
                margin:auto;
                padding:20px;
                border-radius:10px;
                box-shadow:0 5px 10px rgba(0,0,0,0.2);
            }

            ul{
                list-style:none;
                padding:0;
            }

            li{
                margin:10px 0;
            }

            a{
                text-decoration:none;
                color:black;
                padding:8px 15px;
                border-radius:5px;
            }
        </style>
    </head>

    <body>

        <div class='box'>
            <h1>Daftar Hewan</h1>
            <ul>
    ";

    foreach($this->animals as $nama => $deskripsi){
        $html .= "<li><a href='/animals/$nama'>$nama</a></li>";
    }

    $html .= "
            </ul>
        </div>

    </body>
    </html>
    ";

    return $html;
}

    public function show($name)
    {
        if(array_key_exists($name, $this->animals)){
            return "<h1>$name</h1><p>".$this->animals[$name]."</p>";
        } else {
            return "<h1>Hewan tidak ditemukan</h1>";
        }
    }

}