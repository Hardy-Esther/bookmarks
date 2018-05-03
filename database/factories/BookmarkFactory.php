<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Bookmark::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name'       => $faker->title,
        'url'        => $faker->url,
        'content'    => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
