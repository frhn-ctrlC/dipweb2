<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('Login');
        $this->call('Kamera');
        $this->call('Lighting');
        $this->call('Modifier');
    }
}
