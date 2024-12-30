<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedsKriteria extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create("id_ID");

        for ($i = 1; $i < 6; $i++) {
            $created_at = $faker->dateTimeBetween('-1 year', 'now');
            $updated_at = $faker->dateTimeBetween($created_at, 'now');

            $data = [
                'id_akun' => $i,
                'kriteria' => $faker->randomElement(['kinerja', 'komunikasi', 'kerjasama', 'kreativitas', 'disiplin']),
                'keterangan' => $faker->paragraph(),
                'bobot' => $faker->numberBetween(1, 5),
                'created_at' => $created_at->format('Y-m-d H:i:s'),
                'updated_at' => $updated_at->format('Y-m-d H:i:s'),
            ];

            // Using Query Builder
            $this->db->table('kriteria')->insert($data);
        }
    }
}
