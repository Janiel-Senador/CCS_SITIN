<?php
session_start();
include 'config.php';

$student_id = $_POST['student_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE student_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 1){
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        $_SESSION['student_id'] = $user['student_id'];
        header("Location: dashboard.php");
    }else{
        echo "Incorrect password!";
    }
}else{
    echo "User not found!";
}
?>