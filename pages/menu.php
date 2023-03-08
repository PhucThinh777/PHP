<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

?>

<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php">Trang chủ</a></li>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
        <?php
        } ?>
        <li><a href="index.php?quanly=giohang">Giỏ Hàng</a></li>
        <li><a href="index.php?quanly=tintuc">Tin Tức</a></li>
        <li><a href="index.php?quanly=lienhe">Liên Hệ</a></li>
        <li><a href="/Website/admin/login.php">Đăng Xuất</a></li>
        <form action="index.php?quanly=timkiem" method="POST">
            <li><input class="timkiem" type="text" placeholder="Tìm kiếm sản phẩm ..." name="tukhoa"></li>
            <li><button class="btntimkiem" type="submit" name="timkiem" value="Tìm Kiếm">Tìm Kiếm</button></li>
        </form>
    </ul>

</div>