<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'title' => 'Газове обладнання',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category01',
            ],

            [
                'title' => 'Теплові насоси',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category02',
            ],
            [
                'title' => 'Аксесуари',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category01',
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
