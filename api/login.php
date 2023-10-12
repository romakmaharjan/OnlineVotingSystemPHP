<?php
session_start();
include("connect.php");

$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];

//insert check query
$check=mysqli_query($connect, "SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role' ");

if(mysqli_num_rows($check)>0){
    //fectch meaning get a data read from database
    $userdata = mysqli_fetch_array($check);
    $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
    $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata'] =$userdata;
    $_SESSION['groupsdata']=$groupsdata;

    echo '
    <script>
    window.location = "../routes/dashboard.php";
    </script>
    ';

}else{
    echo '
    <script>
    alert("Invalid Credientials or User Not Found!");
    window.location = "../";
    </script>
    ';
}
?>