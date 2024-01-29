<?php

include "config.php";

if(isset($_POST['submit'])){
  $student_name=$_POST['student_name'];
  $class_division=$_POST['class_division'];
  $roll_number=$_POST['roll_number'];

  $sql="INSERT INTO `student`(`student_name`,`class_division`,`roll_number`)VALUES ('$student_name','$class_division','$roll_number')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "<script> 
    alert('Data Inserted successfully');
    window.location='index.php';
    </script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="container mt-3">

<div class="card shadow">
    <div class="card-title">
    <h3 class="text-center mt-2">Add Student Data</h3>
    <a href="index.php" class="btn btn-info m-2" style="float:right;">Back</a>
    </div>
    
<div class="container">

    <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Student Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="student_name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Class And Division:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="class_division" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Roll Number:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="roll_number" required>
  </div>
 
  <button type="submit" class="btn btn-primary m-2" name="submit">Submit</button>
</form>
</div>
</div>    
</div>
    
</body>
</html>