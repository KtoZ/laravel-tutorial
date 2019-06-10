<?php

use App\Models\Photo;
use Faker\Generator as Faker;

// todo 07: ファクトリーを実装
$factory->define(Photo::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'body' => $faker->text,
    ];
});
