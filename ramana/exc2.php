<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $students = array(
          array("Ramana",78,88,90),
          array("Arun",80,93,70),
          array("Kalai",80,85,9),
          array("Saru",50,75,98),
          array("Gowthu",40,65,21),
          ); ?>
        <table border="1">
        <tr>
        <th>Student Name</th>
        <th>Maths</th>
        <th>Science</th>
        <th>Tamil</th>
        <th>Total</th>
        <th>Average</th>
        <th>Rank</th></tr>
    <?php
        for ($i = 0; $i <count($students); $i++) {
           echo"<tr>";
              echo "<td>" .$students[$i][0]."</td>";
                $total = 0;
                $avg=0;
                $a=A;
                $b=B;
                $c=C;
                $s=S;
            for ($j = 1; $j < 4; $j++) {
              echo "<td>" .$students[$i][$j]. "</td>";
              $total+=$students[$i][$j];
            }
            echo "<td>" .$total. "</td>";
            echo "<td>" .$avg=$total/3 . "</td>";

            if ($avg>=75) {
              echo '<td bgcolor="green">' .$a. "</td>";
            } elseif ($avg>=65){
                echo '<td bgcolor="green">' .$b. "</td>";
            } elseif ($avg>=50){
                  echo '<td bgcolor="blue">' .$c. "</td>";
            } elseif ($avg>=40){
                    echo '<td bgcolor="red">' .$s. "</td>";
            }
            echo "</tr>";
            }
        // echo '<pre>';
        // print_r($students);
        // echo '</pre>';
?>
</table>
    </body>
</html>
