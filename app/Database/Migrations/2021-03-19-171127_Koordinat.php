<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Koordinat extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_koordinat' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],

			'nama_lokasi' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],

			'status_lokasi' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
		]);
		$this->forge->addKey('id_koordinat', true);
		$this->forge->createTable('koordinat');
	}

	public function down()
	{
		$this->forge->dropTable('koordinat');
	}
}
