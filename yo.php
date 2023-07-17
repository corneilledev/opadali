<?php
// $access_key = '771f70a5ca362cb995062e198741858d'; // Remplacez YOUR_ACCESS_KEY par votre clé d'accès API
// $ip_address = $_SERVER['REMOTE_ADDR']; // Récupère l'adresse IP de l'utilisateur

// // Effectue une requête à l'API ipstack pour récupérer les informations géographiques de l'utilisateur
// $response = file_get_contents('http://api.ipstack.com/'.$ip_address.'?access_key='.$access_key.'&format=1');

// // Convertit la réponse JSON en tableau associatif
// $location = json_decode($response, true);

// // Récupère la ville et le pays à partir du tableau associatif
// $city = $location['city'];

// $country = $location['country_name'];

// // Affiche la ville et le pays
// echo 'Ville : '.$city.'<br>';
// echo 'Pays : '.$country; 

// set IP address and API access key
$ip = $_SERVER['REMOTE_ADDR'];
$access_key = '771f70a5ca362cb995062e198741858d';

// Initialize CURL:
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

// Output the "capital" object inside "location"
echo $api_result['location']['capital'];
var_dump($api_result);

?>
