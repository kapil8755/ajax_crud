<?php

include("../db/db.php");

  $new=$_POST['id'];
  $name=$_POST['name'];
  $class=$_POST['class'];
  $filename=$_FILES['file']['name'];
  $tmp=$_FILES['file']['tmp_name'];
  $path="php/upload/".$filename;
  move_uploaded_file($tmp,$path);
$sql="UPDATE infos SET name='$name' , class='$class', image='$path' WHERE id='$new'";
$query=mysqli_query($conn,$sql);


?>