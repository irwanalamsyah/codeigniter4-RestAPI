<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KoordinatSeeder extends Seeder{
        public function run()
        {
            $data = [
                    'nama_lokasi' => 'Bandar Udara Internasional Halim Perdanakusuma',
                    'status_lokasi'    => 'kuning'
            ];

            // Simple Queries
            // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

            // Using Query Builder
            $this->db->table('koordinat')->insert($data);
        }
}