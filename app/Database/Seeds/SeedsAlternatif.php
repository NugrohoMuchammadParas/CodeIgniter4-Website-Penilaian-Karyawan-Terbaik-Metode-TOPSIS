<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedsAlternatif extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create("id_ID");

        for ($i = 1; $i < 6; $i++) {
            $created_at = $faker->dateTimeBetween('-1 year', 'now');
            $updated_at = $faker->dateTimeBetween($created_at, 'now');

            $data = [
                'id_akun'     => $i,
                'id_karyawan' => $i,
                'kinerja'     => $faker->numberBetween(1, 5),
                'komunikasi'  => $faker->numberBetween(1, 5),
                'kerjasama'   => $faker->numberBetween(1, 5),
                'kreativitas' => $faker->numberBetween(1, 5),
                'disiplin'    => $faker->numberBetween(1, 5),
                'created_at'  => $created_at->format('Y-m-d H:i:s'),
                'updated_at'  => $updated_at->format('Y-m-d H:i:s'),
            ];

            $this->db->table('alternatif')->insert($data);
        }
    }
}
