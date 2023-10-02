<?php

include("../db/db.php");

if($_POST['name']!="" && $_POST['class']!=""){
  $name=$_POST['name'];
  $class=$_POST['class'];
  $filename=$_FILES['file']['name'];
  $tmp=$_FILES['file']['tmp_name'];
  $path="php/upload/".$filename;

$sql="INSERT INTO infos(name,class,image)VALUES('$name','$class','$path')";
$query=mysqli_query($conn,$sql);
move_uploaded_file($tmp, $path);



}
?>