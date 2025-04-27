<?php
include 'db.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT mood FROM mood WHERE user_id = '$user_id' AND mood_date = CURDATE()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['mood'];
    } else {
        echo "لا يوجد تسجيل لمزاجك اليوم.";
    }
}
?>
