<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 50, $indexSize = 1),
            'excerpt' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'body' => $this->faker->randomHtml(4, 4),
        ];
    }
}
