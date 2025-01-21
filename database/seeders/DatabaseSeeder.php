<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* Storage::deleteDirectory('archive'); */
        Storage::makeDirectory('archive');


         $this->call(UserSeeder::class);
         Category::factory(4)->create();
         Tag::factory(8)->create();
        $this->call(PostSeeder::class);
    }
}
