<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Kategori::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++){
            Kategori::create([
                'nama' => $faker->name,
                'deskripsi' => $faker->paragraph,
            ]);
        }
    }
}
