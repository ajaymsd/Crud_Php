<?php

include "connection.php";

if (isset($_POST['update'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$rollno = $_POST['rollno'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];


$sql = "UPDATE `data_student` SET `name`='$name',`department`='$dept',`rollno`='$rollno',`mail`='$mail',`phone`='$phone' WHERE `id`='$id'"; 
$result = $conn->query($sql); 
if ($result == TRUE) {
   echo "<script>alert('Data Updated Successfylly')</script>";
}else{
    echo "Error:" . $sql . "<br>" . $conn;
}
} 
if (isset($_GET['id'])) {
$id = $_GET['id']; 
$sql = "SELECT * FROM `data_student` WHERE `id`='$id'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {        
while ($row = $result->fetch_assoc()) {
$name = $row['name'];
$dept = $row['department'];
$rollno = $row['rollno'];
$mail = $row['mail'];
$phone= $row['phone'];
$id = $row['id'];
} 
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="h1">CREATE A RECORD</h1>
    <div class="box">
    	<div class="content">
		<form action="" method="post">
    	<label> Name</label><br>
    	<input type="text" name="name" value="<?php echo $name; ?>"><br><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
    	<label>Department</label><br>
    	<input type="text" name="dept" value="<?php echo $dept; ?>"><br><br>
    	<label>Roll No</label><br>
    	<input type="text" name="rollno" value="<?php echo $rollno; ?>"><br><br>
    	<label>Mail</label><br>
    	<input type="text" name="mail" value="<?php echo $mail; ?>"><br><br>
    	<label>Phone</label><br>
    	<input type="text" name="phone" value="<?php echo $phone; ?>"><br><br>
    	<input type="submit" value="SUBMIT" name="update">
</form>
    </div>
    </div>
</body>
</html>
<?php
} else{ 
header('Location: view.php');
}
}
?>