<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Persona Generator",
 *      description="Generating a persona",
 *      @OA\Contact(
 *          email="regis.enguehard@gmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Persona Generator API Server"
 * )
 */


/**
 * @OA\Get(
 *      path="/api",
 *      operationId="persona",
 *      tags={"persona"},
 *      summary="Generate a persona",
 *      @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(ref="#/components/schemas/persona")
 *         ),
 *     ),
 *      @OA\Response(
 *          response=429,
 *          description="Too many requests"
 *      )
 *     )
 */

/**
 * @OA\Schema(
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         example="Mr."
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="Asimov"
 *     ),
 *     @OA\Property(
 *         property="address",
 *         type="string",
 *         example="Isaac"
 *     ),
 *     @OA\Property(
 *         property="phoneNumber",
 *         type="string",
 *         example="01 23 45 67 89"
 *     ),
 *     @OA\Property(
 *         property="company",
 *         type="string",
 *         example="Boston University"
 *     ),
 *     @OA\Property(
 *         property="jobTitle",
 *         type="string",
 *         example="Writer and professor"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         example="isaac@asimov.org"
 *     ),
 *     @OA\Property(
 *         property="userName",
 *         type="string",
 *         example="isaacasimov"
 *     ),
 *     @OA\Property(
 *         property="password",
 *         type="string",
 *         format="password"
 *     ),
 *     @OA\Property(
 *         property="domainName",
 *         type="string",
 *         example="asimov.org"
 *     ),
 *     @OA\Property(
 *         property="localIpv4",
 *         type="string",
 *         example="127.0.0.1"
 *     ),
 *     @OA\Property(
 *         property="card",
 *         type="number",
 *         example="4973 1598 4524 7891"
 *     ),
 *     @OA\Property(
 *         property="expiration",
 *         type="string",
 *         format="date",
 *         example="2042-01-02"
 *     ),
 *     @OA\Property(
 *         property="code",
 *         type="integer",
 *         example="072"
 *     ),
 *     @OA\Property(
 *         property="latitude",
 *         type="number",
 *         format="float",
 *         example="48.8534"
 *     ),
 *     @OA\Property(
 *         property="longitude",
 *         type="number",
 *         format="float",
 *         example="2.3488"
 *     ),
 *     @OA\Property(
 *         property="number",
 *         type="integer",
 *         example="42"
 *     ),
 *     @OA\Property(
 *         property="birthday",
 *         type="string",
 *         format="date",
 *         example="1920-01-02"
 *     ),
 *     @OA\Property(
 *         property="ean13",
 *         type="integer",
 *         example="978-2070360536"
 *     ),
 *     @OA\Property(
 *         property="color",
 *         type="string",
 *         example="#ffc22b"
 *     ),
 *     @OA\Property(
 *         property="realText",
 *         type="string",
 *         example="Même les empires galactiques sont appelés à péricliter. HarrySeldon, psychohistorien de génie, a prédit mathématiquementl'effondrement de l'Empire. Réduire à un unique siècle lalongue ère de barbarie qui suivra cette chute, tel est le défide la Fondation. Aux confins de la galaxie, une planèteconcentre l'intégralité des connaissances qu'une humanitédéliquescente n'aura de cesse de posséder. Mais plus que laconvoitise, la connaissance du futur risque de s'ériger enplus grande menace pour l'accomplissement de ce futur."
 *     )
 * )
 */
class persona extends Controller
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
