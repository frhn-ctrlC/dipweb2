<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
            'sandi' => [
                'type'       => 'VARCHAR',
                'constraint' => 25
            ],
        ]);

        $this->forge->addKey('id', true); // PRIMARY KEY
        $this->forge->createTable('login', true);
    }

    public function down()
    {
        $this->forge->dropTable('login', true);
    }
}
