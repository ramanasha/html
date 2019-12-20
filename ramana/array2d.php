<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title></title>
  </head>
  <body>
    <?php
      $x = array(array(10,19,29,"ramana"),array(30,29,29,"Sharma"),array(00,29,69,"ramana"));
      // echo '<pre>';
      // print_r($x);
      // echo '</pre>';
          // for ($i=0; $i <3 ; $i++) {
          //   for ($j=0; $j <3 ; $j++) {
          //     echo $x[$i][$j];
          //     echo "<br>";
          //   }
          // }

          for ($i=0; $i <count($x) ; $i++) {
            for ($j=0; $j <count ($x[$i]) ; $j++) {
              echo $x[$i][$j];
              echo "<br>";
            }
          }
        ?>

  </body>
</html>
