<?php
include 'DB_connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="select * from users where id= ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        echo "User not found!";
        exit();
    }
}

// Handle form submission
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    // Update query using prepared statement
    $update_sql = "UPDATE users SET fname=?, lname=?, address=?, email=? WHERE id=?";
    $stmt = $con->prepare($update_sql);
    $stmt->bind_param("ssssi", $fname, $lname, $address, $email, $id);
    
    if ($stmt->execute()) {
        echo "Record updated successfully!";
        header("Location: read.php"); // Redirect back to records page
        exit();
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Update User</h2>
        <form method="POST">
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo htmlspecialchars($user['fname']); ?>" required>
            </div>
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo htmlspecialchars($user['lname']); ?>" required>
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($user['address']); ?>" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
            <a href="read.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
