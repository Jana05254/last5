<?php
include 'db.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT course, day, time FROM schedule WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    $schedule = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $schedule[] = $row;
        }
    }

    echo json_encode($schedule);
}
?>
