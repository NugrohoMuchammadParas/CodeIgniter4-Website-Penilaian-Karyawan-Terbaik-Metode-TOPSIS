<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationPerangkingan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_perangkingan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_alternatif' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'id_karyawan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'nilai' => [
                'type'           => 'FLOAT',
                'constraint'     => 5.3,
                'unsigned'       => true,
            ],
            'rank' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at'  => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
            ],
            'updated_at'  => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
            ],
        ]);

        $this->forge->addKey('id_perangkingan', true);
        $this->forge->addForeignKey('id_alternatif', 'alternatif', 'id_alternatif', 'CASCADE', 'CASCADE');
        $this->forge->createTable('perangkingan');
    }

    public function down()
    {
        $this->forge->dropTable('perangkingan');
    }
}
