<?php

namespace Database\Seeders;

use App\Models\Produk;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Produk::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
            Produk::create([
                'nama' => $faker->name,
                'harga' => $faker->randomNumber(5),
                'deskripsi' => $faker->paragraph,
                'tampil' => $faker->boolean,
                'kategori_id' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
