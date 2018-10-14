<?php


use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' =>'My First Video',
        'src'	=>'http://google.com'
    ];
});
