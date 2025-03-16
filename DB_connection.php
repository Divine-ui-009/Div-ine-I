<?php
$server="localhost";
$user_name="divine";
$psw="mine";
$db="student_mis";

$con=new mysqli($server,$user_name,$psw,$db);
/*you can also create connection using
$con=mysqli_connect($server,$user_name,$psw,$db);
*/

if(!$con){
    echo "Connection failed";
}else{
    echo "connected successfully";
}
// mysqli_close($con);
?>