<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kamera extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_cam'     => 'Canon EOS R6',
                'lok_cam'      => 'Cilacap',
                'kategori_cam' => 'Mirrorless',
                'sampul_cam'   => 'canon_r6.jpg'
            ],
            [
                'nama_cam'     => 'Sony A7 IV',
                'lok_cam'      => 'Purbalingga',
                'kategori_cam' => 'Mirrorless',
                'sampul_cam'   => 'sony_a7iv.jpg'
            ],
        ];

        $this->db->table('kamera')->insertBatch($data);
    }
}
