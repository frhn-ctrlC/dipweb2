<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lighting extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lig' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_lig' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'lok_lig' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],
            'kategori_lig' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],
            'sampul_lig' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
        ]);

        $this->forge->addKey('id_lig', true); // PRIMARY KEY
        $this->forge->createTable('lighting', true);
    }

    public function down()
    {
        $this->forge->dropTable('lighting', true);
    }
}
