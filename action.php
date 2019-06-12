<?php
include 'connection/conn.php';
echo "<div style='display:none;'>";
if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $nic = $_POST['nic'];
  $date = $_POST['date'];
  $photo = $_POST['photo'];
  
    $sql = "INSERT into users (user_name,user_father,user_mobile,user_nic,user_adddate,user_photo) values ('$name','$fname','$mobile','$nic','$date','$photo')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("location: index.php");
    }
    else{
        echo "something wrong";
    }
}

echo "</div>";
?>

<?php 
//echo "<div style='display:none;'>";
include 'connection/conn.php';

if(isset($_POST['delete']))
{
    $id = $_POST['uid'];

    $sql = "Delete from users where uid='".$id."' ";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
else{
    echo "You did something wrong. go back";
}
}

//echo "</div>";
?>

<?php
include 'connection/conn.php';
echo "<div style='display:none;'>";
if(isset($_POST['update']))
{
  $id = $_POST['uid'];
  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $nic = $_POST['nic'];
  $date = $_POST['date'];
  $photo = $_POST['photo'];
}
$sql = "UPDATE users set user_name= '$name',user_father='$fname',user_mobile='$mobile',user_nic='$nic',user_adddate='$date',user_photo='$photo' where uid= $id ";
$result = mysqli_query($conn,$sql);
if($result){
    header("location: index.php");
}
else{
    echo "You did something wrong. go back";
}   
echo "</div>";
?>

<?php
echo "<div style='display:none;'>";
session_start();
if($_SESSION['username'] == null){
header("location: login.php");
}
echo "</div>";
?>