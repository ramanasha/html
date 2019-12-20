<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <title>Exe-1</title>
  </head>
  <body>
    <?php
      $Maths="20";
      $English="50";
      $Science="28";
      $Tamil="49";
      $sum_total = $Maths + $English + $Science + $Tamil;
      $average = $sum_total /4;
      ?>

  <h1 >Subject & Marks</h1>
  <table border="1">
  <tr>
    <td>Subject</td>
    <td>Mark</td>
  </tr>
  <tr>
    <td>Maths</td>
    <td><?php echo $Maths; ?></td>
  </tr>
  <tr>
    <td>English</td>
    <td><?php echo $English; ?></td>
  </tr>
  <tr>
    <td>Science</td>
    <td><?php echo $Science; ?></td>
  </tr>
  <tr>
    <td>Tamil</td>
    <td><?php echo $Tamil; ?></td>
  </tr>
  <tr>
    <td>Total</td>
    <td><?php echo $sum_total ?></td>
  </tr>
  <tr>
  <tr>
      <td>Avrage</td>
    <td <?php if($average >= 50): ?> style="background-color:green;"  <?php else: ?> style="background-color:red;"<?php endif; ?>>
        <?php echo $average;?>
    </td>
</tr>

<tr>
    <td>Avrage</td>
  <td bgcolor="<?php echo ($average >= 50)? "green" :"red" ?>" <?php echo $average;?> </td>
</tr>
</tr>
</table>
  </body>
</html>








<!-- <tr>
    <td>Avrage</td>
  <td bgcolor="<<?php if($average >= 50){ echo "green";}  else { echo "red";} ?>" <?php echo $average;?> </td>
</tr> -->
