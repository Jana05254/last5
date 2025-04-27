<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin-top: 100px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        .button-container a {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }
        .button-container a.login {
            background-color: #2196F3;
        }
        .button-container a:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<h1>مرحبًا بك في موقع الجامعة الذكي</h1>

<?php if (!isset($_SESSION['user_id'])): ?>
<div class="button-container">
    <a href="signup.php">تسجيل حساب جديد</a>
    <a href="login.php" class="login">تسجيل دخول</a>
</div>
<?php else: ?>
<script>
    // إذا كان المستخدم مسجل دخول، يحوله إلى الصفحة الشخصية
    window.location.href = 'profile.php';
</script>
<?php endif; ?>

</body>
</html>
