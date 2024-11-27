<div class="over-flow-auto"> 
    <table class="table table-bordered table-striped">
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
   