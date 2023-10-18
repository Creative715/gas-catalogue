<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Creative Studio',
            'email' => 'web415@gmail.com',
        ]);
       $products = Product::factory(250)->create();

       $this->call(CategorySeeder::class);
       $this->call(CategoryProductSeeder::class);

    }
}
