<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Modifier extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_mod'     => 'Softbox 60x90',
                'lok_mod'      => 'Cilacap',
                'kategori_mod' => 'Softbox',
                'sampul_mod'   => 'softbox_60x90.jpg'
            ],
            [
                'nama_mod'     => 'Reflector Silver 80cm',
                'lok_mod'      => 'Cilacap',
                'kategori_mod' => 'Reflector',
                'sampul_mod'   => 'reflector_80.jpg'
            ],
        ];

        $this->db->table('modifier')->insertBatch($data);
    }
}
