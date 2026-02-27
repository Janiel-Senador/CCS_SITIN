<?php
include 'config.php';

if($_POST['password'] != $_POST['repeat_password']){
    die("Passwords do not match!");
}

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO students 
(student_id,last_name,first_name,middle_name,course_level,course,email,address,password)
VALUES (?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("sssssssss",
    $_POST['student_id'],
    $_POST['last_name'],
    $_POST['first_name'],
    $_POST['middle_name'],
    $_POST['course_level'],
    $_POST['course'],
    $_POST['email'],
    $_POST['address'],
    $password
);

if($stmt->execute()){
    header("Location: login.php");
}else{
    echo "Error: " . $stmt->error;
}
?>