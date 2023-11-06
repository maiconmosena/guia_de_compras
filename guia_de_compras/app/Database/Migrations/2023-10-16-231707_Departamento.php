<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departamento extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome_dep' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => false
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('departamento');


    }

    public function down()
    {
        $this->forge->dropTable('departamento');
    }
}
