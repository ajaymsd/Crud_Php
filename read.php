<?php 
   include "connection.php";
   $sql="select * from data_student";
   $result=$conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>

	<title>RECORDS</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
	<style>
		*{
    font-family:'Poppins', sans-serif ;
    margin:0;
    padding:0; 
   }
body{
    background-color:#06283D;
}
h1{
    text-align: center;
    margin-top:2%;
    color:#F9F9F9;  

 }
 .table-box{
 	margin-left: 9%;
 	margin-top: 5%;
 	background-color: wheat;
 	padding:15px;
 	color:black;
 	width:1100px;
 	border-radius: 10px;
 }
 table,
        th,
        td {
            margin-left: 8%;
            border-collapse: collapse;
            padding: 25px;
			text-align:center;
           
        }
 
        tr:nth-child(odd) {
            background-color: #8F9AA5;

        }
        .btn-act{
        	background-color:green;
        	color:white;
        	padding:6px;
        	border-radius: 7px;
			text-decoration:none;
        }
         .btn-act1{
        	background-color:red;
        	color:white;
        	padding:6px;
        	border-radius: 7px;
            text-decoration: none;
        }
	</style>
</head>
<body>
   <h1>READ,UPDATE,DELETE RECORDS</h1>
   <div class="table-box">

   	<table>
   		<tr>
            <th>S.NO</th>
   			<th>NAME</th>
   			<th>DEPARTMENT</th>
   			<th>ROLL NO</th>
   			<th>MAIL</th>
   			<th>PHONE</th>
   			<th>MANIPULATIONS</th>
   		</tr>
   		<?php
          if($result->num_rows>0){
          	  while ($row = $result->fetch_assoc()) {

          
   		 ?>
   		  <tr>
                   <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['department']; ?></td>

                    <td><?php echo $row['rollno']; ?></td>

                    <td><?php echo $row['mail']; ?></td>

                    <td><?php echo $row['phone']; ?></td>

                    <td><a class="btn-act" href="update.php?id=<?php echo $row["id"]; ?>">Update</a>&nbsp;
                    <a class="btn-act1" href="delete.php?id=<?php echo $row["id"]; ?>" title='Delete'>Delete</a></td>
                </tr>
               <?php
                  }
              }

                ?>
   	</table>

   </div>
</body>
</html>