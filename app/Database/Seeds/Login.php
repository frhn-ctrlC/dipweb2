<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Login extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'admin@example.com',
                'no_hp' => '081234567890',
                'sandi' => 'admin123'
            ],
            [
                'email' => 'user@example.com',
                'no_hp' => '089876543210',
                'sandi' => 'user123'
            ],
        ];

        $this->db->table('login')->insertBatch($data);
    }
}
