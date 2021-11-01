<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index() {
        $genres = array('male', 'female');
        $genre = $genres[array_rand($genres)];

        $faker = \Faker\Factory::create('fr_FR');
/*
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.generated.photos/api/v1/faces?api_key=G3XmsXXS-N6t3LpY2IKWvA&per_page=1&gender='.$genre);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        
        $data = json_decode($output);
echo '<pre>';
var_dump($data->faces[0]->urls[4]);
echo '</pre>';
exit;
*/
        return view('index', compact('faker', 'genre'));
    }
}
