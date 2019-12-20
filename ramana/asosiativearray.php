<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $x= array("maths" => 90 , "science" => 74,"english"=>99 );
    // echo "maths marks ".$x["maths"],"<br>";
    // echo "science marks ".$x["science"],"<br>";
    // echo "english marks ".$x["english"];

    foreach ($x  As $k =>$v) {
    echo $k."".$v;
    }
    ?>
  </body>
</html>
