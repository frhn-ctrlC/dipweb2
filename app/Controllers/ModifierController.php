<?php

namespace App\Controllers;

use App\Models\ModifierModel;

class ModifierController extends BaseController
{
    protected $modifier;

    public function __construct()
    {
        $this->modifier = new ModifierModel();
    }

    public function index()
    {
        $data['modifier'] = $this->modifier->findAll();
        $data['kategori'] = null;
        return view('kategori/kat_modifier', $data);
    }

    public function kategori($kategori)
    {
        $data['modifier'] = $this->modifier
            ->where('kategori_mod', $kategori)
            ->findAll();
        $data['kategori'] = $kategori;
        return view('kategori/kat_modifier', $data);
    }
}
