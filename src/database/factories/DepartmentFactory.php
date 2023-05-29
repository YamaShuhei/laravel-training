<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Faker\Factory as FakerFactory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    private static int $number = 1;

    public function definition()
    {
        $faker = FakerFactory::create('ja_JP');
        return [
            'name' => '部署'.self::$number++,
            'manager_name' => $faker->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
