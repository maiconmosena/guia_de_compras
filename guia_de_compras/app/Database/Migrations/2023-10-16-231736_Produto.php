<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produto extends Migration
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
            'departamento_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'categoria' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'quantidade' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'valor' => [
                'type' => 'float',
                'constraint' => 10.2
            ],
            'data_validade' => [
                'type' => 'DATE',
            ],
            'data_compra' => [
                'type' => 'DATE',
            ],
            'descricao' => [
                'type' => 'TEXT',
                'null' => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produtos');
        $this->forge->addkey('compras', 'departamento_id', 'id');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
