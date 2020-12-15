<?php
include 'connect.php';
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = " INSERT INTO `curdtable`( `username`, `password`) VALUES ('$username','$password')";

$query = mysqli_query($con , $q);

}


?>


<DOCTYPE html>
    <html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">

<form method="post">
    <br><br><div class="card">
        <div class="class-header bg-dark">
            <h1 class="text-white text-center">  Insert Operation</h1>
        </div><br>

        <lable>username:</lable>
        <input type="text" name="username" class="form-control"><br>

        <lable>password:</lable>
        <input type="text" name="password" class="form-control"><br>
        <button class="btn btn-success" type="submit" name="done">Submit</button><br>
        </div>


</form>
</div>


</body>










</html>