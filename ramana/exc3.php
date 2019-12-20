<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
    <?php
    $students = array("Stu1" =>array("name"=>"Ramana","maths" => 90 , "science" => 84,"english"=>79 ),
                      "Stu2" =>array("name"=>"kannan","maths" => 60 , "science" => 54,"english"=>69 ),
                      "Stu3" =>array("name"=>"Gowthu","maths" => 80 , "science" => 84,"english"=>79 ),
                      "Stu4" =>array("name"=>"Isha","maths" => 99 , "science" => 44,"english"=>99 ),
                      "Stu5" =>array("name"=>"Kalai","maths" => 90 , "science" => 64,"english"=>69 )
                    );
          foreach ($students as $key => $val) {
            //echo '<tr><td>Student Deatils</td></tr>';
            echo "<tr>";
            echo '<th colspan="3">' .$key. '</th>';
            echo "</tr>";
            $total=0;
            //$i=0;
          foreach ($val as $key2 => $val2) {
            //  if ($i!=0) {
            if(is_numeric($val2)){

            }
            echo "<tr>";
            echo "<td>" .$key2.'</td>';
            echo "<td>" .$val2.'</td>';
            echo "</tr>";
            $total+=$val2;
          }
          //  }
          echo "<tr><td>"."Total"."</td><td>".$total."</td></tr>";
          echo "<tr><td>"."Avarage "."</td><td>". $avg=$total/3 ."</td></tr>";
          echo "</tr>";
        }
     ?>
   </table>
  </body>
</html>
