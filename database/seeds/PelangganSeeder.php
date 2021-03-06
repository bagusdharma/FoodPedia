<?php

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        for ($i=1; $i < 6 ; $i++) { 
            $nama = $faker->name;
            DB::table('pelanggans')->insert([
                'nama' => $nama,
                'nohp' => '0812343123'.($i),
                'alamat' => $faker->address,
                'deskripsi' => 'Jalani hidup dengan santai'
            ]);


            DB::table('users')->insert([
                'name' => $nama,
                'email' => 'pelanggan'.($i).'@gmail.com',
                'phone' => '0812343123'.($i),
                'address' => $faker->address,
                'description' => 'Jalani hidup dengan santai',
                'password' => bcrypt('pelanggan123'),
            ]);
        }
    }
}
