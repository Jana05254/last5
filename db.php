<?php
$host = 'dpg-d078pb2li9vc73f32hd0-a.frankfurt-postgres.render.com';
$dbname = 'communitydb_v8xw';
$user = 'communityuser';
$pass = 'LGwEbaL6Gz9QzPorCVxg5jK1FHLiZXaM';
$port = '5432';

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    // Set error mode to exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // اختبار الاتصال
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
