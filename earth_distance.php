<?php

$latitude = (isset($_POST['latitude']) && !empty(trim($_POST['latitude'])) ? $_POST['latitude'] : false );
$longitude = (isset($_POST['longitude']) && !empty(trim($_POST['longitude'])) ? $_POST['longitude'] : false );

class DistanceOnEarth {

function distance_across_any_points_on_earth($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo) {

//Earths Distance 
$radius = (6.3781*10**6);

//Converting degrees to Radians to latitude
$phi_1 = deg2rad($latitudeFrom);
$phi_2 = deg2rad($latitudeTo);

//Convert distance between 
$delta_phi = deg2rad($latitudeTo - $latitudeFrom);
$delta_lambda = deg2rad($longitudeTo - $longitudeFrom);

$alpha = sin($delta_phi / 2)**2 + cos($phi_1) * cos($phi_2) * sin($delta_lambda / 2)**2;
$beta = 2 * atan(sqrt($alpha)/sqrt(1-$alpha));

//Distance in meteres
$final = $radius * $beta;

//Display distance in killometers 
echo "You are" . " " . round($final/1000, 0) . " " . "kilometers from London";

    }
}


$distance = new DistanceOnEarth();

$distance->distance_across_any_points_on_earth(51.5074, 0.1278, $latitude , $longitude );




















?>
