<?php
$connect= mysqli_connect("localhost","root","","voting") or die("connection failed");

if($connect){
    echo "connected successfully";
}else{
    echo "Not Connected";
}
?>