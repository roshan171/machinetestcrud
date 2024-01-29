
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    
<div class="container mt-3">
    <div class="card shadow">
<div class="card-title">
<h2 class="text-center mt-3">Student Data</h2>
</div>
<div class="col-sm-3">
    <a href="adddata.php" class="btn btn-primary">Add Data</a>
</div>


    <table class="table table-striped  mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Class And Division</th>
      <th scope="col">Roll Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
$sql="SELECT * FROM `student`";
$result=mysqli_query($conn,$sql);
$i=1;

?>

<?php
while($data=mysqli_fetch_assoc($result)){

?>

<tr id=<?php echo $data['id'];?>>
   	<td> <?php echo $i++; ?></td>
<td><?php echo $data['student_name'];?></td>
<td><?php echo $data['class_division'];?></td>
<td><?php echo $data['roll_number'];?></td>
<td class="action">
  <a href="updatedata.php?id=<?php echo $data['id'];?>" class="btn btn-success">Edit</a>
  <a href="deletedata.php?id=<?php echo $data['id'];?>" class="btn btn-danger" onclick= "alert('Are You Sure To Delete Data..')">delete</a>
</td>
</tr>
   
   <?php }?>
  </tbody>
</table>
</div>



 
</div>












<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>