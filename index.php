<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>Crud Opertion With Ajax Jquery And Php</h1>
<div class="new">


<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Class</th>
    <th>Profile</th>
    <th colspan="2">Opertion</th>
</tr>
<tbody id="data"></tbody>
</table>
</div>
<center>
<form class="submit" enctype="multipart/form-data" id="crud">
    <h1>Insert Data</h1>
<input type="hidden" name="id" class="id"> <br><br>
    Name:<input type="text" name="name" class="name" autocomplete="off"> <br><br>
    Class:<input type="text" name="class" class="class" autocomplete="off"> <br><br>
    Profile Upload:<input type="file" name="file" class="file" autocomplete="off"> <br><br>
    <input type="submit" name="submit" value="insert" class="button"> <br><br>
</form>
</center>


<div class="model">
  <div class="model-form">
    
  <form id="update">
  <button class="close">X</button>
  <div id="image_update"></div>

  <button class="u-btn">Update</button>

  </form>
  </div>
  </div>








<script src="js/jquery.js"></script>
<script src="js/app.js"></script>
</body>
</html>