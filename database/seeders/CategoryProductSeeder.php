<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    public function run()
    {
        // Використовуємо фабрику для створення 500 записів
        CategoryProduct::factory()->count(250)->create();
    }
}
