<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'food');

if(isset($_POST['ordern now'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $text=$_POST['text'];
    $address=$_POST['address'];
    $sql="insert into order(name,email,number,text,address)
    values('$name', '$email', '$number', '$text', '$address')";
    $s=mysqli_query($con,$sql);
    header('location:index.html');
}

  ?>