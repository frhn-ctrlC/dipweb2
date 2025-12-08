<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Lighting extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lig'     => 'Godox SL60W',
                'lok_lig'      => 'Banyumas',
                'kategori_lig' => 'Continuous Light',
                'sampul_lig'   => 'godox_sl60w.jpg'
            ],
            [
                'nama_lig'     => 'Aputure Amaran 100D',
                'lok_lig'      => 'Cilacap',
                'kategori_lig' => 'LED Light',
                'sampul_lig'   => 'amaran_100d.jpg'
            ],
        ];

        $this->db->table('lighting')->insertBatch($data);
    }
}
