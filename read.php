<?php
include 'DB_connection.php';
$sql='select * from users';
$result=$con->query($sql);


?>
<html>
    <title>View data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <body>
        <div class="container">
             <h2>Users</h2>
            <table class="table" border="1">
                <thead>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </thead>
                     <?php
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            ?>
                <tr>
                                        
                    <td><?php echo htmlspecialchars($row['id']);?></td>
                    <td><?php echo htmlspecialchars($row['fname']);?></td>
                    <td><?php echo htmlspecialchars($row['lname']);?></td>
                    <td><?php echo htmlspecialchars($row['address']);?></td>
                    <td><?php echo htmlspecialchars($row['email']);?></td>
                    <td><?php echo htmlspecialchars($row['password']);?></td>  
                    <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a> 
                        <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td> 
                </tr>
                    <?php
                        }
                        } else {
                        echo "<tr><td colspan='5'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
                    
            </table>
                    <a href="sign_up.html">Add record</a>
        </div>
    </body>
</html>