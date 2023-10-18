<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CategoryProduct; // Додайте імпорт моделі CategoryProduct

class CategoryProductFactory extends Factory
{
    protected $model = CategoryProduct::class; // Встановіть модель для фабрики

    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 15), // Генеруємо випадкове число від 1 до 3 для category_id
            'product_id' => $this->faker->numberBetween(1, 250), // Генеруємо випадкове число від 1 до 3 для product_id
        ];
    }
}

