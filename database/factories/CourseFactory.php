<?php

use Faker\Generator as Faker;
use App\Models\Course;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'cover_image' => $faker->imageUrl(),
        'content' => $faker->paragraph,
        'robotics_kit_id' => $faker->numberBetween(1, 3), // Asignar un robotics kit aleatorio
    ];
});
