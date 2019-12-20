<?php

echo '<table border = "1">';
echo '<tr><td colspan = "2"> Student Details </td></tr>';

// first name
echo '<tr>';
echo '<td>First Name</td>';
echo '<td>' . $_POST["fname"] . '</td>';

echo '</tr>';

// last name
echo '<tr>';
echo '<td>Last Name</td>';
echo '<td>' . $_POST["lname"] . '</td>';
echo '</tr>';

// gender
echo '<tr>';
echo '<td>Gender</td>';
echo '<td>' . $_POST["gender"] . '</td>';
echo '</tr>';

// class
echo '<tr>';
echo '<td>Class</td>';
echo '<td>' . $_POST["grade"] . '</td>';
echo '</tr>';

// subject
// $subjects = $_POST[subject];

// foreach ($subjects as $subject){
//     echo '<tr>';
// echo '<td>Subject</td>';
// echo '<td>' . $subject . '</td>';
// echo '</tr>';
// }

//implode It is convert Array to String
echo '<tr>';
echo '<td>Subject</td>';
echo '<td>' . implode(",", $_POST["subject"]) . '</td>';
echo '</tr>';


// address
echo '<tr>';
echo '<td>Address</td>';
echo '<td>' . $_POST["address"] . '</td>';
echo '</tr>';
echo '</table>';



//implode It is convert String to array
$sub = "Maths,English,Tamil,Science";
$subarray = explode(",", $sub);
echo $subarray[1];
echo "</br>";

//chect the comming values arrays or not(is_array)
if(is_Array($_POST["subject"])){

    echo '<tr>';
    echo '<td>Subject</td>';
    echo '<td>' . implode(",", $_POST["subject"]) . '</td>';
    echo '</tr>';

    }else{

    echo '<tr>';
    echo '<td>Subject</td>';
    echo '<td>' . $subject . '</td>';
    echo '</tr>';

    }
?>






















<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- print_r($_POST);
    echo implode (",".$_POST[subject]);
    $sub="maths,English,Tamil";
    $subArray=exlode(",",$sub);
    echo $sub[1]; -->
  <!--  <table border="1">
    <?php
    foreach ($_POST as $data => $val) {
      echo '<tr>';
       if(is_array($val)) {
        // echo implode (",",$val);
      echo '<th>' .implode (",",$val). '</th>';
      }
      else {
      echo '<td>' .$data. '</td>';
      }
      echo '<th>' .$val. '</th>';
      echo '</tr>';
      }
    ?>
   </table>
  </body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="1">
    <tr>
      <td colspan="2"><center><h3>Student Deatils</center></h3></td>
    </tr>
    <tr>
    <td>First Name </td>
    <td><?php echo $_POST["fname"]; ?></td>
    </tr>
  <tr>
    <td>Last Name </td>
    <td><?php echo $_POST["lname"]; ?></td>
    </tr>
  <tr>
    <td>Gender </td>
    <td><?php echo $_POST["gender"]; ?></td>
    </tr>
  <tr>
    <td>Class </td>
    <td><?php echo $_POST["grade"]; ?></td>
    </tr>
  <tr>
    <td>Subject </td>
    <td><?php echo $_POST["subject"]; ?></td>
    </tr>
  <tr>
    <td>Address </td>
    <td><?php echo $_POST["address"]; ?></td>
    </tr>
</table>

</body>
</html> -->
