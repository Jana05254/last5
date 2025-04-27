<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>مجتمع الجامعة الذكي</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header class="header">
  <h1>مجتمع الجامعة الذكي</h1>
  <nav>
  <ul>
    <li><a href="index.php">الرئيسية</a></li>

    <?php if ($is_logged_in): ?>
      <li><a href="skills.php">مهاراتي</a></li>
      <li><a href="schedule.php">جدولي الدراسي</a></li>
      <li><a href="community.php">مجتمعي</a></li>
      <li><a href="assistant.php">مساعدي الذكي</a></li>
    <?php endif; ?>

  </ul>
</nav>
</header>

<!-- باقي الصفحة مثل السؤال عن شعورك -->

</body>
</html>
