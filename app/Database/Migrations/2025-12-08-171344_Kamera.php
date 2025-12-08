<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kamera extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cam' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_cam' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'lok_cam' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],
            'kategori_cam' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],
            'sampul_cam' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
        ]);

        $this->forge->addKey('id_cam', true); // PRIMARY KEY
        $this->forge->createTable('kamera', true);
    }

    public function down()
    {
        $this->forge->dropTable('kamera', true);
    }
}
