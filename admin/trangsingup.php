<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM tbl_dangky WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location: /Website/index.php");
    } else {
        header("Location: login.php");
    }
} elseif (isset($_POST['dangky'])) {
    header("Location: signup.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title>Trang Đăng Nhập</title>
</head>

<body>
    <header>
        <div class="overlay">
            <h2>Trang Đăng Nhập</h2>
            <br>
        </div>
    </header>

    <form class="login" action="" autocomplete="off" method="POST">
        <input type="text" placeholder="Tên đăng nhập" name="username">
        <input type="password" placeholder="Mật khẩu" name="password">
        <!-- <input type="submit" name="dangnhap" value="Login"> -->
        <button type="submit" name="dangnhap">Login</button>
        <button type="submit" name="dangky" id="signup">Sign Up</button>
        <a href="/Website/admin/thaydoimatkhau.php">Thay đổi mật khẩu</a>
    </form>
</body>

</html>