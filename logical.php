<?php
if($_POST)
$name1=$_POST['1name'];
$name2=$_POST['2name'];
$username=$name1. $name2;
$mail=$_POST['gmail'];
$psw=$_POST['psw'];
$tel=$_POST['tele'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$country=$_POST['country'];
$birthdate=$_POST['birthday'];
$color=$_POST['color'];
$meal=$_POST['food'];
$pic=$_POST['image'];
$mother=$_POST['mom'];
$father=$_POST['dad'];
$studies=$_POST['level'];
$range=$_POST['like'];
$comment=$_POST['comment'];
$time=$_POST['time'];
?>

<table border="1px solidblack" cellspacing="0px">
    <tr>
        <td>Username</td>
        <td>E-mail</td>
        <td>Email password</td>
        <td>Tel number</td>
        <td>Gender</td>
        <td>Marital status</td>
        <td>Country</td>
        <td>Date of Birth</td>
        <td>Favourite color</td>
        <td>Favourite food</td>
        <td>Mother's name</td>
        <td>Father's name</td>
        <td>Education level</td>
        <td>Your like</td>
        <td>Comment</td>
        <td>Time filled</td>
        <td>Choosen file</td>
    </tr>
    <tr>
        <td><?php echo $username;?></td>
        <td><?php echo $mail;?></td>
        <td><?php echo $psw;?></td>
        <td><?php echo $tel;?></td>
        <td><?php echo $gender;?></td>
        <td><?php echo $status;?></td>
        <td><?php echo $country;?></td>
        <td><?php echo $birthdate;?></td>
        <td><?php echo $color;?></td>
        <td><?php echo $meal;?></td>
        <td><?php echo $mother;?></td>
        <td><?php echo $father;?></td>
        <td><?php echo $studies;?></td>
        <td><?php echo $range;?></td>
        <td><?php echo $comment;?></td>
        <td><?php echo $time;?></td>
        <td><?php echo $pic;?></td>
    </tr>
</table>
