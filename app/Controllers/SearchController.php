<?php

namespace App\Controllers;

use App\Models\KameraModel;
use App\Models\LightingModel;
use App\Models\ModifierModel;

class SearchController extends BaseController
{
    protected $kamera;
    protected $lighting;
    protected $modifier;

    public function __construct()
    {
        $this->kamera   = new KameraModel();
        $this->lighting = new LightingModel();
        $this->modifier = new ModifierModel();
    }

    public function index()
    {
        $keyword = $this->request->getGet('q');

        if (!$keyword) {
            return view('search/result', [
                'keyword' => '',
                'kamera' => [],
                'lighting' => [],
                'modifier' => []
            ]);
        }

        $data['kamera'] = $this->kamera
            ->like('nama_cam', $keyword)
            ->orLike('kategori_cam', $keyword)
            ->orLike('lok_cam', $keyword)
            ->findAll();

        $data['lighting'] = $this->lighting
            ->like('nama_lig', $keyword)
            ->orLike('kategori_lig', $keyword)
            ->orLike('lok_lig', $keyword)
            ->findAll();

        $data['modifier'] = $this->modifier
            ->like('nama_mod', $keyword)
            ->orLike('kategori_mod', $keyword)
            ->orLike('lok_mod', $keyword)
            ->findAll();

        $data['keyword'] = $keyword;

        return view('search/result', $data);
    }
}
