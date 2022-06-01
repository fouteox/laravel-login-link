<?php

namespace Spatie\LoginLink\Tests\TestSupport\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LoginLink\Tests\TestSupport\Models\Admin;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('secret'),
            'role' => 'guest',
        ];
    }
}
