<?php

namespace Database\Factories;

<<<<<<< HEAD
=======
use App\Models\Book;
>>>>>>> o/main
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
    protected $model = Book::class;
>>>>>>> o/main
    public function definition()
    {
        return [
            "title" => fake()->sentence($nbWords = 4, $variableNbWords = true),
            "price" => fake()->randomDigit(),
            "description" => fake()->text(),
            "pic" => fake()->imageUrl()
        ];
    }
}
