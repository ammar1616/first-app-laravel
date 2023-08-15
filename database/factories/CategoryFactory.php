<?php

namespace Database\Factories;

<<<<<<< HEAD
=======
use App\Models\Category;
>>>>>>> o/main
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
    protected $model = Category::class;
>>>>>>> o/main
    public function definition()
    {
        return [
            'name' => fake()->sentence($nbWords = 4, $variableNbWords = true)
        ];
    }
}
