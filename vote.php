<?php
session_start();
include("connect.php");

$votes = $_POST['gvotes'];
$totalvotes = $votes + 1;
$gid = $_POST['gid'];
$uid = $_SESSION['userdata']['id'];

$update_vote = mysqli_query ($connect , "UPDATE user SET votes = '$totalvotes' WHERE id = '$gid'");
$update_user_status = mysqli_query ($connect , "UPDATE user SET status = 1 WHERE id = '$uid'");

if ($update_vote and $update_user_status) 
{
   $groupes = mysqli_query($connect , "SELECT * FROM user WHERE role='2'");
   $groupesdata = mysqli_fetch_all($groupes, MYSQLI_ASSOC);
   $_SESSION['userdata']['status'] = 1;
   $_SESSION['groupesdata'] = $groupesdata;

    echo '  
    <script>
    alert("Voted Successfully");
    window.location = "../MICRO_PROJECT/dashbord.php";
    </script>';
    
  
}
else
{
    echo '
    <script>
    alert(" Some Error");
    window.location = "../MICRO_PROJECT/dashbord.php";
    </script>';

}
?>