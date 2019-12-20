<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    form.double {border-style: double;}
  </style>
  </head>
  <body>
    <form class="double" action="test2.php" method="post">
      <h3>Student</h3>
       <label for="fname">Full Name :  </lable>
       <input  type="text" name="fname" id="fname" /><br><br>
       <label>Last Name : <input  type="text" name="lname" id="lname" /></label><br><br>
       <p>Please select your gender:</p>
       <label><input type="radio" name="gender" value = "Male" id="gender"/> Male<br></label>
       <label><input type="radio" name="gender" value = "Female" id="gender"/> Female<br><br></label>
       <label> Class :<select name="grade">
         <option value="10A" id="10A">10A</option>
         <option value="10B" id="10B">10B</option>
         <option value="10C" id="10C">10C</option>
       </select></label><br><br>
       <p>Please select your Subjects:</p>
       <label>
         <input type="checkbox" name="subject[]" value="Maths" id="subject"> Maths<br>
       </label>
       <label>
         <input type="checkbox" name="subject[]" value="English" id="subject" checked> English<br>
       </label>
       <label>
         <input type="checkbox" name="subject[]" value="Tamil" id="subject" > Tamil<br><br>
       </label>
       <label> Address : <textarea wrap="150" type="text" name="address" id="address"></textarea><br><br></label>
     <input type="submit" value="Submit"/>
     <input type="reset" value="Reset"/>
  </form>
  </body>
</html>
<!-- <?php if ($_POST["gender"] =="Male") echo "checked";?> -->
