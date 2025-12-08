<?php

namespace App\Controllers;

use App\Models\LightingModel;

class LightingController extends BaseController
{
    protected $lighting;

    public function __construct()
    {
        $this->lighting = new LightingModel();
    }

    public function index()
    {
        $data['lighting'] = $this->lighting->findAll();
        $data['slug'] = null; // FIX


        return view('kategori/kat_lighting', $data);
    }

    // public function kategori($kategori)
    // {
    //     $data['lighting'] = $this->lighting
    //         ->where('kategori_lig', $kategori)
    //         ->findAll();
    //     $data['kategori'] = $kategori;
    //     return view('kategori/kat_lighting', $data);
    // }

    /** helper mapping slug -> kategori (manual) */
    private function slugToKategori($slug)
    {
        $map = [
            'studio-flash' => 'Studio Flash',
            'continuous'   => 'Continuous Light',
            'LED-Light'    => 'LED Light',
            'speedlight'   => 'Speedlight',
            // tambahkan sesuai data di DB
        ];

        return $map[$slug] ?? null;
    }

public function kategori($slug = null)
{
    // Jika kamu pakai slug -> ubah slug ke nama kategori
    $kategori = $this->slugToKategori($slug);

    if (!$kategori) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $data['lighting'] = $this->lighting
        ->where('kategori_lig', $kategori)
        ->findAll();

    $data['kategori'] = $kategori;
    $data['slug']     = $slug;      // <-- kirim slug ke view

    return view('kategori/kat_lighting', $data);
}




}
