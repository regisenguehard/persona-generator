<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\personaResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    $genres = array('male', 'female');
    $genre = $genres[array_rand($genres)];

    $faker = \Faker\Factory::create('fr_FR');
    $data['title'] = $faker->title($genre);
    $data['name'] = $faker->name($genre);
    $data['address'] = $faker->address();
    $data['phoneNumber'] = $faker->phoneNumber();
    $data['company'] = $faker->company();
    $data['jobTitle'] = $faker->jobTitle();
    $data['email'] = $faker->email();
    $data['userName'] = $faker->userName();
    $data['password'] = $faker->password();
    $data['domainName'] = $faker->domainName();
    $data['localIpv4'] = $faker->localIpv4();
    $data['card']['number'] = $faker->creditCardNumber();
    $data['card']['expiration'] = $faker->date('d/m/Y', $faker->creditCardExpirationDate());
    $data['card']['code'] = $faker->numberBetween(0, 999);
    $data['latitude'] = $faker->latitude();
    $data['longitude'] = $faker->longitude();
    $data['number'] = $faker->randomDigit();
    $data['birthday'] = $faker->date('d/m/Y', $faker->dateTimeBetween('-100 years', '-10 weeks'));
    $data['ean13'] = $faker->ean13();
    $data['color'] = $faker->hexColor();
    $data['realText'] = $faker->realText();

    return $data;
})->name('apihome');