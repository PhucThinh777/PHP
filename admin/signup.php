<?php
session_start();
include('config/config.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM tbl_admin WHERE username='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location: index.php");
    } else {
        header("Location: trangsingup.php");
    }
} elseif (isset($_POST['dangky'])) {
    header("Location: signup.php");
}
?>

<?php
include('config/config.php');
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['matkhau'];
    $diachi = $_POST['diachi'];
    $dienthoai = $_POST['dienthoai'];
    $query_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,username,password,diachi,dienthoai) VALUE('" . $tenkhachhang . "','" . $email . "','" . $username . "','" . $password . "','" . $diachi . "','" . $dienthoai . "')");
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
    <title>Trăng Đăng Ký</title>
</head>

<body>
    <header>
        <div class="overlay">
            <h2>Trang đăng ký</h2>
            <br>
        </div>
    </header>

    <form class="login" action="" autocomplete="off" method="POST">
        <input type="text" placeholder="Họ và tên" name="hovaten">
        <input type="text" placeholder="Email" name="email">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Mật khẩu" name="matkhau">
        <input type="text" placeholder="Địa chỉ" name="diachi">
        <input type="text" placeholder="Số điện thoại" name="dienthoai">
        <button type="submit" name="dangnhap">Back</button>
        <button type="submit" name="dangky" id="signup">Sign Up</button>
    </form>
</body>

</html>