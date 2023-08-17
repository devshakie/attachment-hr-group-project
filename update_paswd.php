<?php
session_start();
include 'conn.php';
if (isset($_SESSION['employee_id'])) {

    
    $employee_id = mysqli_real_escape_string($con, $_SESSION['employee_id']);
} else {
    die("Employee ID not found in session!"); 
}


$oldpassword = isset($_POST['oldpassword']) ? mysqli_real_escape_string($con, $_POST['oldpassword']) : null;
$newpassword = isset($_POST['newpassword']) ? mysqli_real_escape_string($con, $_POST['newpassword']) : null;

// Get the hashed password from the database for the given employee ID
$sql = "SELECT password FROM login WHERE employee_id='$employee_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Check if the old password matches with the hashed password
    if (password_verify($oldpassword, $row['password'])) {
        // Update the password with the new hashed password
        $newhashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
        $sql = "UPDATE login SET password='$newhashedpassword' WHERE employee_id='$employee_id'";
        mysqli_query($con, $sql);
        echo '<script>alert("Password changed successfully!");</script>';
    } else {
        echo "Old password is incorrect!";
    }
} else {
    echo "Employee ID not found in database!";
}

mysqli_close($con);
?>