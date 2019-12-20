<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 35%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
      <?php echo in_array("Maths",$_POST["subject"]); ?>
<h2>Student Details Form</h2>
<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" value="<?php echo $_POST["fname"];?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" value="<?php echo $_POST["lname"];?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <!-- <?php
          $gender=$_POST["gender"];
          $subject=$_POST["subject"];
          $grade=$_POST["grade"];
          if ($gender =="Male") {
          ?>
            <label><input type="radio" name="gender" value="Male" > Male<br></label>
            <?php
          }else {
            ?>
            <label><input type="radio" name="gender" value="Female"> Female<br></label>
          }
        <?php
          }
          ?> -->
        <?php
        $gender=$_POST["gender"];
        ?>
        <label><input type="radio" name="gender" value="Male" <?php if ($gender=="Male") {echo "checked";} ?>> Male<br></label>
        <label><input type="radio" name="gender" value="Female" <?php if ($gender=="Female") {echo "checked";} ?>> Female<br></label>
          <?php echo ($gender=="Female")? "checked":""; ?>

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Subject</label>
      </div>
      <div class="col-75">
        <label><input type="checkbox" name="subject[]" value="Maths" <?php (in_Array("Maths",$subject))?"checked":"" ?>> Maths<br></label>
        <label><input type="checkbox" name="subject[]" value="English" <?php (in_Array("English",$subject))?"checked":"" ?> > English<br></label>
        <label><input type="checkbox" name="subject[]" value="Tamil"  <?php (in_Array("Tamil",$subject))?"checked":"" ?>> Tamil<br></label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Class">Class</label>
      </div>
      <div class="col-75">
        <select name="grade">
          <option value="10A" <?php if ($grade=="10A") {echo "selected";} ?> >10A</option>
          <option value="10B" <?php if ($grade=="10B") {echo "selected";} ?> >10B</option>
          <option value="10C" <?php if ($grade=="10C") {echo "selected";} ?> >10C</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <div class="col-75">
          <input style="width:250px" type="text" id="address" name="address" value="<?php echo $_POST["address"];?>">
          
        </div>
    </form>
</div>
</body>
</html>
