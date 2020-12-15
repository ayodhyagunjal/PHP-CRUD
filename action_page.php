<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=form", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

$username = $_POST['uname'];
$password_new = $_POST['psw'];
$name = $_POST['name'];
echo "POST reqest data: Username:".$username." Password: ".$password_new."<br><br>";

$sql = "INSERT INTO users (name, uname, password) VALUES ('$name', '$username', '$password_new')";
if ($conn->exec($sql)) {
  echo "New record created successfully<br><br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>