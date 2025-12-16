<?php
session_start(); 
include("connect.php");

$voter_id = $_POST['voter_id'];
$password = $_POST['password'];
$role = $_POST['role'];

$check = mysqli_query($connect , "SELECT * FROM user WHERE voter_id='$voter_id' AND password='$password' AND role='$role'");

if(mysqli_num_rows($check) > 0)
{   
    $userdata = mysqli_fetch_array($check);
    $groupes = mysqli_query($connect , "SELECT * FROM user WHERE role='2'");
    $groupesdata = mysqli_fetch_all($groupes, MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupesdata'] = $groupesdata;
    echo '
    <script>
    window.location = "../MICRO_PROJECT/dashbord.php";
    </script>';
}
else{
    echo '
    <script>
    alert("Invalid Voter ID or Password");
    window.location = "../MICRO_PROJECT/index.php";
    </script>'; 
}
?>