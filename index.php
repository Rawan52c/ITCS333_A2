<?php

$URL = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';

$response = file_get_contents($URL);

print_r($response);

$output = json_decode($response, true);

print_r($output);

if (!$output || !isset($output ["results"])) {
    die("Something went wrong, Output (data) not found");

}

$output_result = $output ["results"];

?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>UOB Student Nationality Data</title>
    <link rel="stylesheet" href="css/pico.min.css">

</head>

<body>
     <div class="over-flow-auto"> 
         <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>The Programs</th>
                    <th>Nationality</th>
                    <th>Colleges</th>
                    <th>Number of students</th>
                </tr>
            </thead>
            <tbody>

                <?php
           
                foreach ($output_result as $student_data) {
                ?>
                    <tr> 
                         <td> <?php echo $student_data["Year"]; ?> </td>
                         <td> <?php echo $student_data["Semester"]; ?> </td>
                         <td> <?php echo $student_data["The_Programs"]; ?> </td>
                         <td> <?php echo $student_data["Nationality"]; ?> </td>
                         <td> <?php echo $student_data["Colleges"]; ?> </td>
                         <td> <?php echo $student_data["Number_of_students"] ?? 'N/A'; ?> </td>
                    </tr> 
            
                <?php 

                }
                ?>
            </tbody> 

 
        </div>
 
</body>
</html>




