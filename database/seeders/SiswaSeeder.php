<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('siswa')->insert([
                'no_pendaftaran' => 'PDFT00' . $i,
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'tanggal_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'asal_sekolah' => $faker->company,
                'agama_id' => $faker->numberBetween(1, 5), // Assuming you have 5 different religion IDs
                'nilai_ind' => $faker->randomFloat(2, 1, 10),
                'nilai_ipa' => $faker->randomFloat(2, 1, 10),
                'nilai_mtk' => $faker->randomFloat(2, 1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}