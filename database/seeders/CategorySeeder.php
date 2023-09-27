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
                'title' => 'Category01',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category01',
            ],

            [
                'title' => 'Category02',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category02',
            ],
            [
                'title' => 'Category03',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category01',
            ],
            [
                'title' => 'Category04',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, omnis. Velit et facere soluta quidem, maiores iste sunt veritatis facilis esse? Eveniet molestias iusto eum aliquid ullam hic, sequi repellendus?',
                'slug' => 'category04',
            ],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
