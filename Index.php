<?php
$con=mysqli_connect("127.0.0.1","root","","keerthana");
// if(isset($_POST["name"]) && !empty($_POST["name"])){
//     $name=$_POST["name"];
//     $phone=$_POST["phone"];
//     $password=$_POST["password"];
//     $sql="INSERT INTO users(`name`,`phone`,`password`) VALUES('$name','$phone','$password')";
//     mysqli_query($con,$sql);
// }
$row=mysqli_query($con,"SELECT * FROM users");

// while($single=mysqli_fetch_assoc($row)){
//     // echo $single["name"].$single["phone"];

// }
?>
<html>
    <head>
        <style>
            table,td,th{
                border:1px solid black;
                border-collapse:collapse;
            }
            th,td{
                padding:10px 20px;
            }
        </style>
    </head>
    <body>
        <form action="Client.php" method="post">
            <input type="text" name="name">
            <input type="text" name="phone">
            <input type="password" name="password">
            <input type="submit" value="submit">
        </form>
        <table>
            <tr>
                <th>SN</th>
                <th>name</th>
                <th>phone number</th>
            </tr>
            <?php
             $sn=0;
             while($single=mysqli_fetch_assoc($row)){ ?>
            <tr>
                <td><?php  echo ++$sn;?></td>
                <td><?php echo $single["name"];?></td>
                <td><?php echo $single["phone"];?></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>