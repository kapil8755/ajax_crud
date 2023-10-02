<?php

include("../db/db.php");
$sql="SELECT * FROM infos";
$query=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_assoc($query)){
?>

<tr>
    <td><?php echo $rows['id'] ?></td>
    <td><?php echo $rows['name'] ?></td>
    <td><?php echo $rows['class'] ?></td>
    <td><img src="<?php echo $rows['image'];?>" alt="" width="50px" height="50px"></td>
    <td><button data-eid="<?php echo $rows['id'] ?>" id="edit">Edit</button></td>
    <td><button data-did="<?php echo $rows['id'] ?>" id="delete">Delete</button></td>
</tr>


<?php 
}
?>