<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Modifier extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mod' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_mod' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'lok_mod' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],
            'kategori_mod' => [
                'type'       => 'VARCHAR',
                'constraint' => 20
            ],
            'sampul_mod' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
        ]);

        $this->forge->addKey('id_mod', true); // PRIMARY KEY
        $this->forge->createTable('modifier', true);
    }

    public function down()
    {
        $this->forge->dropTable('modifier', true);
    }
}
