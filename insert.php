<?php 
  include "connection.php";

  if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$dept=$_POST['dept'];
	$rollno=$_POST['rollno'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];

	$sql="insert into data_student (name,department,rollno,mail,phone) values('$name','$dept',$rollno,'$mail','$phone')";
	if (mysqli_query($conn, $sql)) {
        
		header("Location:index.html");
		echo "<script>alert('Data Inserted Successfylly')</script>";
        
     } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
     }
     mysqli_close($conn);
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="h1">CREATE A RECORD</h1>
    <div class="box">
    	<div class="content">
		<form action="insert.php" method="post">
    	<label> Name</label><br>
    	<input type="text" name="name"><br><br>
    	<label>Department</label><br>
    	<input type="text" name="dept"><br><br>
    	<label>Roll No</label><br>
    	<input type="text" name="rollno"><br><br>
    	<label>Mail</label><br>
    	<input type="text" name="mail"><br><br>
    	<label>Phone</label><br>
    	<input type="text" name="phone"><br><br>
    	<input type="submit" value="SUBMIT" name="submit">
</form>
    </div>
    </div>
</body>
</html>