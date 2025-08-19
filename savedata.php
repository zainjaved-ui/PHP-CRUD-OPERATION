<?php

echo $stu_name= $_POST['sname']; 
echo $stu_address= $_POST['saddress']; 
echo $stu_class= $_POST['class']; 
echo $stu_phone= $_POST['sphone'];


$conn = mysqli_connect("localhost","root","","crud","3307") or die("Connection failed: " . mysqli_connect_error());
$sql= "INSERT INTO student (sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die(" Query unsuccessfull");

header("Location: http://localhost/crud/crud_html/index.php");


mysqli_close($conn);

?>