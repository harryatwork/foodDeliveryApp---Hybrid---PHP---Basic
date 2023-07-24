<?php
include "distancefinder.class.php";

//Calculate Car Driving Distance in Kilometer from two Addresses
$df = new distanceFinder("Car Drive");
$result = $df->findDistance("795 E DRAGRAM, TUCSON AZ 85705, USA", "300 BOYLSTON AVE E, SEATTLE WA 98102, USA");
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Car Driving Distance is: " . $result . " Kilometer.<br />";
}

//Calculate Walking Distance in Kilometer from two Addresses
$df = new distanceFinder("Walking");
$result = $df->findDistance("795 E DRAGRAM, TUCSON AZ 85705, USA", "300 BOYLSTON AVE E, SEATTLE WA 98102, USA");
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Walking Distance is: " . $result . " Kilometer.<br />";
}

//Calculate Bicycle Distance in Kilometer from two Addresses
$df = new distanceFinder("Bicycle");
$result = $df->findDistance("795 E DRAGRAM, TUCSON AZ 85705, USA", "300 BOYLSTON AVE E, SEATTLE WA 98102, USA");
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Bicycle Distance is: " . $result . " Kilometer.<br />";
}

//Calculate Geographical Distance in Kilometer from two Addresses
$df = new distanceFinder("Geographic");
$result = $df->findDistance("New Jersey, United States", "New York, USA");
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Geographic Distance is: " . $result . " Kilometer.<br />";
}

//Calculate Geographical Distance in Kilometer from two pairs of Latitude and Longitude
$df = new distanceFinder("Geographic");
$result = $df->findDistance(array("32.2680738", "-110.9923904"), array("47.6210785", "-122.323045"));
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Geographic Distance is: " . $result . " Kilometer.<br />";
}

//Calculate Geographical Distance in Mile from two pairs of Latitude and Longitude
$df = new distanceFinder("Geographic");
$df->setDistanceUnit("Mile");
$result = $df->findDistance(array("32.2680738", "-110.9923904"), array("47.6210785", "-122.323045"));
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Geographic Distance is: " . $result . " Mile.<br />";
}

//Calculate Geographical Distance in Kilometer and Mile from two pairs of Latitude and Longitude
$df = new distanceFinder("Geographic");
$df->setDistanceUnit("All");
$result = $df->findDistance(array("32.2680738", "-110.9923904"), array("47.6210785", "-122.323045"));
if (isset($result['error'])) {
    echo $result['error']['msg'];
} else {
    echo "Geographic Distance is: " . $result['Mile'] . " Mile or ". $result['KM'] . " Kilometer.<br />";
}

?>