<?php

namespace TeamTeaTime\Forum\Database\Factories;

use TeamTeaTime\Forum\Models\Category;
use TeamTeaTime\Forum\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    protected $model = Thread::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'category_id' => CategoryFactory::new(),
            'locked' => 0,
            'pinned' => 0,
            'reply_count' => 0
        ];
    }
}