<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\calculationModel;
use Faker\Generator as Faker;

$factory->define(calculationModel::class, function (Faker $faker) {
    return [
        //
         
        'assigned_calc_ID' => $faker->name,
        'user_ID' => 3, 
        'optical_u' => $faker->number,
         'optical_g'=> $faker->number, 
         'optical_r'=> $faker->number, 
         'optical_i'=> $faker->number, 
         'optical_z'=> $faker->number, 
         'infrared_three_six'=> $faker->number
, 'infrared_four_five'=> $faker->number
, 'infrared_five_eight'=> $faker->number
, 'infrared_eight_zero'=> $faker->number
, 'infrared_J'=> $faker->number
, 'infrared_K'=> $faker->number
, 'radio_one_four'=> $faker->number, 'redshift_result'=> $faker->number,
    ];
    
});
