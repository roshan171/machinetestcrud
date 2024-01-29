<?php

include "config.php";
$id=$_GET['id'];

if(isset($_POST['Update'])){
    $student_name=$_POST['student_name'];
    $class_division=$_POST['class_division'];
    $roll_number=$_POST['roll_number'];

  $sql="UPDATE `student` SET `id`='$id',`student_name`='$student_name',`class_division`='$class_division',`roll_number`='$roll_number' WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "<script> 
    alert('Data Updated successfully');
    window.location='index.php';
    </script>";
  }
}

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `student` WHERE `id`='$user_id'";
$result=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($result);

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
    <h3 class="text-center mt-2">Update Student Data</h3>
    <a href="index.php" class="btn btn-info m-2" style="float:right;">Back</a>
    </div>
    
<div class="container">

    <form action="" method="post">
        <input type="hidden" name="userid"  value="<?php echo $data['id'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="student_name" value="<?php echo $data['student_name'];?>" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="class_division" value="<?php echo $data['class_division'];?>" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="roll_number" value="<?php echo $data['roll_number'];?>" required>
  </div>
 
  <button type="submit" class="btn btn-primary m-2" name="Update">Update</button>
</form>
</div>
</div>    
</div>
    
</body>
</html>