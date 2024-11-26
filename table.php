<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOB student nationality data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picocss@1.4.0/pico.min.css">
</head>
<body>

<div class="container">
    <h1>University of Bahrain Students Enrollment by Nationality</h1>

      <table class="table table-responsive" style="overflow: auto;">
        <thead>
            <tr>
                <th>Student Nationality</th>
                <th>Number of Students</th>
            </tr>
        </thead>

        <tbody>
            <?php
           
            foreach ($result['results'] as $data) {
              
                $nationality = isset($data['nationality']) ? $data['nationality'] : 'N/A';
                $number_of_students = isset($data['number_of_students']) ? $data['number_of_students'] : 'N/A';

                
                echo "<tr><td>$nationality</td><td>$number_of_students</td></tr>";
            }
            ?>
        </tbody>
    </table>
   

</div>

</body>
</html>