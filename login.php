<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo "success";
        } else {
            echo "invalid";
        }
    } else {
        echo "notfound";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>تسجيل الدخول</h2>
    <form method="POST" action="">
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" name="email" required><br><br>

        <label for="password">كلمة المرور:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">دخول</button>
    </form>

    <p>لا تملك حسابًا؟ <a href="signup.php">سجل حساب جديد</a></p>
</body>
</html>
