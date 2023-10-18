<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        $created =  $this->faker->dateTimeBetween('-21 days', '-1 days');
        return [
            'title' => $this->faker->text(30),
            'seo_title' => $this->faker->text(30),
            'category_id' => $this->faker->numberBetween( 1, 4),
            'serial' => $this->faker->numberBetween( 1000000000, 7000000000),
            'content' => $this->faker->paragraph(30, true),
            'charact' => $this->faker->paragraph(30, true),
            'description' => $this->faker->text(25),
            'slug' => $slug,
            'created_at' => $created,
            'updated_at' => $created,
            'published' => 1,
            'price' => $this->faker->randomElement([1000, 2000, 3000, 3500, 4000, 4200, 5000, 7100, 8100, 10000]),
        ];
    }
}
