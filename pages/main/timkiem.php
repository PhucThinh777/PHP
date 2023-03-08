<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham
LIKE '%" . $tukhoa . "%'";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>

<h1 class="Genshin">Từ khóa tìm kiếm : <?php echo $_POST['tukhoa']; ?></h1>
<ul class="list_product">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?><li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="300px" height="250px">
                <p>
                    <h3>Tên sản phẩm: <?php echo $row['tensanpham'] ?></h3>
                </p>
                <p>Giá: <?php echo number_format($row['giasp'], 0, ',', ',') . ' vnd' ?></p>
                <h4>Tên danh mục: <?php echo $row['tendanhmuc'] ?></h4>
            </a>
        </li>
    <?php
    }
    ?>
</ul>
</div>