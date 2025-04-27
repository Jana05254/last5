<?php
include 'db.php';

if (isset($_SESSION['user_id']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $mood = $_POST['mood'];

    $sql = "INSERT INTO mood (user_id, mood) VALUES ('$user_id', '$mood')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
