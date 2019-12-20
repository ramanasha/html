<html phpclass1>
<head>
  <title> homepage</title>
</head>
<body>
<?php
print "Welcome Home Page<br>";    //,"<br>" not working
EchO  "Welcome Home index Page","<br>";  // EcHO can write
?>

<?php
$x="10";
echo 'X is' .$x,"<br>";   // can work single 'X is'   or double ""
var_dump($x);             //to check datatype helping function
$x=10;
var_dump($x);


$x=5/2;
echo 'X is ' .$x,"<br>";

$x=5**2;
echo 'X is ' .$x,"<br>";
?>

</body>
</html>
