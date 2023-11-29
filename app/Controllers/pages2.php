<?php

namespace App\Controllers;

class Pages extends BaseController
{
    //Menu Home
    public function index()
    {
        $data = [
            'title' => 'WEB-Pertemuan 3'
        ];
        return view("pages/about", $data);
    }

    //Menu about
    public function about()
    {
        $data = [
            'title' => 'About me',
            'tentang' => 'silahkan perkenalkan diri jkenengan di sini dalam bentuk kalimat (3-5 kalimat)'
        ];
        return view('pages/about', $data);
    }
}
