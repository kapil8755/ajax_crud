<?php

include("../db/db.php");
$new=$_POST['id'];
$sql="DELETE FROM infos WHERE id='$new'";
$query=mysqli_query($conn,$sql);

?>