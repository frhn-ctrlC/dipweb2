<?php

namespace App\Controllers;

use App\Models\KameraModel;

class KameraController extends BaseController
{
    protected $kamera;

    public function __construct()
    {
        $this->kamera = new KameraModel();
    }

    public function index()
    {
        $data['kamera'] = $this->kamera->findAll();
        $data['kategori'] = null;
        return view('kategori/kat_kamera', $data);
    }

    public function kategori($kategori)
    {
        $data['kamera'] = $this->kamera
            ->where('kategori_cam', $kategori)
            ->findAll();
        $data['kategori'] = $kategori; 
        return view('kategori/kat_kamera', $data);
    }
}
