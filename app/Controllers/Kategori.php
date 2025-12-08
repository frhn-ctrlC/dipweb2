<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    public function kamera()
    {
        return view('kategori/kat_kamera');
    }

    public function lighting()
    {
        return view('kategori/kat_lighting');
    }

    public function modifier()
    {
        return view('kategori/kat_modifier');
    }
}