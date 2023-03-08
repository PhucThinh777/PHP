<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc ='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
//get ten danh muc
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc ='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>

<h1 class="Genshin">Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h1>
<ul class="list_product">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" width="300px" height="250px">
                <p>
                    <h3>Tên sản phẩm: <?php echo $row_pro['tensanpham'] ?></h3>
                </p>
                <p>Giá: <?php echo number_format($row_pro['giasp'], 0, ',', ',') . ' vnd' ?></p>
            </a>
        </li>
    <?php
    }
    ?>

</ul>