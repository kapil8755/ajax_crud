

<?php

include("../db/db.php");
$id=$_POST['id'];
$sql="SELECT * FROM infos WHERE id='$id'";
$query=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($query);
?>



         <input type="hidden" name="id" id="id" value="<?php echo $rows['id'] ?>"> <br><br>
    Name:<input type="text" name="name" id="name" autocomplete="off" value="<?php echo $rows['name'] ?>"> <br><br>
    Class:<input type="text" name="class" id="class" autocomplete="off" value="<?php echo $rows['class'] ?>"> <br><br>
    <img src="<?php echo $rows['image'] ?>" alt="" width="40px" height="40px">
    Profile Upload:<input type="file" name="file" class="file" autocomplete="off"> <br><br>