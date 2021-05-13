<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مرحبا</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 16px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">اهلا <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>مرحبا بك في موقعنا</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">لاستعادة كلمة المرور</a>
        <a href="logout.php" class="btn btn-danger ml-3">تسجيل الخروج</a>
    </p>
</body>
</html>