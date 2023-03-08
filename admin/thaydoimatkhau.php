<?php
// session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $matkhau_cu = $_POST['password_cu'];
    $matkhau_moi = $_POST['password_moi'];
    $sql = "SELECT * FROM tbl_dangky WHERE username='" . $username . "' AND password='" . $matkhau_cu . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $sql_update =  mysqli_query($mysqli, "UPDATE tbl_dangky SET password='" . $matkhau_moi . "'");
        echo '<p style = "color:green">Mật khẩu đã được thay đổi</p>';
    } else {
        echo '<p style = "color:red">Mật khẩu không đúng vui lòng nhập lại</p>';
    }
} elseif (isset($_POST['dangky'])) {
    header("Location: trangsingup.php");
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
    <title>Trang Đổi Mật Khẩu</title>
</head>

<body>
    <header>
        <div class="overlay">
            <h2>Trang Thay Đổi Mật Khẩu</h2>
            <br>
        </div>
    </header>

    <form class="login" action="" autocomplete="off" method="POST">
        <input type="text" placeholder="Tên đăng nhập" name="username">
        <input type="password" placeholder="Mật khẩu cũ" name="password_cu">
        <input type="password" placeholder="Mật khẩu mới" name="password_moi">
        <button type="submit" name="dangnhap">Thay đổi</button>
        <button type="submit" name="dangky" id="signup">Sign Up</button>
    </form>
</body>

</html>