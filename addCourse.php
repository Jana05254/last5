<?php
include 'db.php';

if (isset($_SESSION['user_id']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $course = $_POST['course'];
    $day = $_POST['day'];
    $time = $_POST['time'];

    $sql = "INSERT INTO schedule (user_id, course, day, time) VALUES ('$user_id', '$course', '$day', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
