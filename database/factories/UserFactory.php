<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_type' => 'seeker',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'cname' => $name=$faker->company,
        'slug'=> str_slug($name),
        
    ];
});

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random(10)->id,
        'company_id' => App\Company::all()->random(10)->id,
        'position' => 'recepcionista',
        'setor' => 'recepção',
        'slug'=> str_slug($name),         
    ];
});

$factory->define(App\Form::class, function (Faker $faker) {
    return [        
        'company_id' => App\Company::all()->random()->id,
        'profile_id' => App\Profile::all()->random()->id,
        'name' => $faker->name,
        'mother' => 'Maria',
        'passport' => '123456789',
        'cpf' => '12345678904',
        'rg' => '123456789',
        'address' => $faker->address,
        'email' => $faker->email,
        'phone' => $faker->landlineNumber,
        'cellphone' => $faker->cellPhoneNumber,
        'checkin' => $faker->date($format = 'D-m-y', $max = 'now'),
        'checkout' => $faker->date($format = 'D-m-y', $max = 'now'),
        'slug'=> str_slug($name),  
    ];
});