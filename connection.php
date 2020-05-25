<?php
// Connect to databse
$link=mysqli_connect("localhost","root","password","onlinenotes");

if(mysqli_connect_error()){
    die("ERROR:Unable to connect".mysqli_connect_error());
    echo "<script>window.alert('Hi!')</script>";
}
?>