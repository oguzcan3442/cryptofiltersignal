<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'html' => '<blockquote class="twitter-tweet"><p lang="art" dir="ltr">🍿</p>&mdash; Elon Musk (@elonmusk) <a href="https://twitter.com/elonmusk/status/1569699453786898432?ref_src=twsrc%5Etfw">September 13, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
            'created_at' => now(),
            'created_at' => now()
        ];
    }
}
