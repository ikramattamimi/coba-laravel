<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Ikram Muhammad Bukhori Attamimi",
            "email" => "attamimiikram@gmail.com",
            "image" => "ikram.jpg"
        ]);
    }
}
