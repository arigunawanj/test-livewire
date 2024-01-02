<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Post::truncate();
        Schema::enableForeignKeyConstraints();

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            Post::create([
                'judul' => $faker->name(),
                'isi' => $faker->paragraph(),
                'tampil' => $faker->boolean(),
                'user_id' => 1,
                'kategori_id' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
