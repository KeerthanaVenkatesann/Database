<?php
$con=mysqli_connect("127.0.0.1","root","","keerthana");
if(isset($_POST["name"]) && !empty($_POST["name"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $sql="INSERT INTO users(`name`,`phone`,`password`) VALUES('$name','$phone','$password')";
    mysqli_query($con,$sql);
    header("Location:Index.php");
}
?>
