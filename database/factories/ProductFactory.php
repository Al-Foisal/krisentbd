<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'subcategory_id' => 1,
            'childcategory_id' => 1,
            'brand_id' => $this->faker->randomElement([1, 2, 3]),

            'name' => $this->faker->sentence(6),
            'buying' => $this->faker->numberBetween(500, 1000),
            'selling' => $this->faker->numberBetween(1100, 1500),
            'quantity' => $this->faker->numberBetween(10, 30),
            'details' => $this->faker->paragraph(10, true),

            'specification' => $this->faker->paragraph(5, true),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            //store images
            $num = $this->faker->numberBetween(3, 5);
            for ($i = 0; $i < $num; $i++) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $this->faker->image('public/images/product', 400, 320, null, false),
                ]);
            }

            if ($product->id % 2) {
                //store color
                $colors = Color::all()
                    ->pluck('id')
                    ->toArray();
                $color = $this->faker->randomElements($colors, 2);
                $product->colors()->sync($color);

                //store size
                $sizes = Size::all()
                    ->pluck('id')
                    ->toArray();
                $size = $this->faker->randomElements($sizes, 1);
                $product->sizes()->sync($size);
            }
        });
    }
}
