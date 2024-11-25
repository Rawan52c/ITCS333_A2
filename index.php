<?php

$URL = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';

$response = file_get_contents($Endpoint_URL);

if ($response === false) {
    die('Something went wrong, Please try again.');

}

$result = json_decode($response, true);

if (isset($result['results']) && is_array($result['results'])) {

    include 'table.php';
} else {
    echo '<p> Error, Please Try Again.';
}

?>