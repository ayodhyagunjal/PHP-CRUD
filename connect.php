<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'curdoperation');
if($con){

}else{
    echo "Not connected";
}


?>