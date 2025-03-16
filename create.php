<?php
include 'DB_connection.php';
global $con;
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $psd=$_POST['psw'];

    $sql="insert into users(fname,lname,address,email,password) values('$fname','$lname','$address','$email','$psd')";
    $result=$con->query($sql);

    if($result==true){
        echo "New record added successfully";
    }else{
        echo "Error: ".$sql."<br>".$con->error;
    };

   
 //$con->close();
 }
?> 
  <html>
  <a class="btn btn-info" href="sign_up.html"><br>Back</a>
    <a class="btn btn-info" href="read.php"><br>View record from database</a>
   