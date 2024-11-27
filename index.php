<?php

$URL = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';
$response = file_get_contents($URL);

if ($response === false) {
    die('Something went wrong, Please try again.');
}

$result = json_decode($response, true);
?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>UOB student nationality data</title>
    <link rel="stylesheet" href="css/pico.min.css">

</head>

<body>
<div class="container">
    <h1>University of Bahrain Students Enrollment by Nationality</h1>

    if (isset($result['results']) && is_array($result['results'])) {

<?php include 'table.php';?>

} else {
echo '<p> Error, Please Try Again.';
}

</div>

</body>

</html>




