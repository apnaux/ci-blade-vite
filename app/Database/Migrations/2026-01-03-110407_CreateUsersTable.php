<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 512,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ], 
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
