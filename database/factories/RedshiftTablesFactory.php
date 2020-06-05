<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\redshift_tables;
use Faker\Generator as Faker;

$factory->define(redshift_tables::class, function (Faker $faker) {
   return [
        //
         
        'assigned_calc_ID' => $faker->numberBetween(1,100),
        'user_ID' => 2, 
        'optical_u' => $faker->numberBetween(1,100),
         'optical_g'=> $faker->numberBetween(1,100), 
         'optical_r'=> $faker->numberBetween(1,100), 
         'optical_i'=> $faker->numberBetween(1,100), 
         'optical_z'=> $faker->numberBetween(1,100), 
         'infrared_three_six'=> $faker->numberBetween(1,100)
, 'infrared_four_five'=> $faker->numberBetween(1,100)
, 'infrared_five_eight'=> $faker->numberBetween(1,100)
, 'infrared_eight_zero'=> $faker->numberBetween(1,100)
, 'infrared_J'=> $faker->numberBetween(1,100)
, 'infrared_K'=> $faker->numberBetween(1,100)
, 'radio_one_four'=> $faker->numberBetween(1,100), 
'redshift_result'=> $faker->numberBetween(1,100),
    ];
});
