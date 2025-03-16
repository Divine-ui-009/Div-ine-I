<?php
include 'DB_connection.php';

if(isset($_GET)){
    $id=$_GET['id'];
$sql="delete from users where id= ".$id;
$result=$con->query($sql);
if($result===true){
    echo "Record deleted successfully";
}else{
    echo "delete operation failed";
}

}
?>