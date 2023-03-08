<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header('Location: login.php');
}
?>


<a class="header" href="index.php?dangxuat=1">
    <h3>| ĐĂNG XUẤT |</h3><?php if (isset($_SESSION['dangnhap'])) {
                                echo $_SESSION['dangnhap'];
                            } ?>
</a>