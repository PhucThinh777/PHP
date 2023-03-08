<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);

while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {

?><div class="trang2">
        <ul>
            <li><img id="zoomA" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"></li>
            <li>

                <div class="chitiet_sanpham">
                    <h2>
                        <p>Chi tiết sản phẩm</p>
                    </h2>
                    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                        <h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
                        <h3>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></h3>
                        <h3>Số lượng sản phẩm: <?php echo $row_chitiet['soluong'] ?></h3>
                        <h3>Mô tả chi tiết: <?php echo $row_chitiet['tomtat'] ?></h3>
                        <h3>Nội dung sản phẩm: <?php echo $row_chitiet['noidung'] ?></h3>
                        <h3>Giá: <?php echo number_format($row_chitiet['giasp'], 0, ',', ',') . ' vnd' ?></h3>
                        <h3><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                            <h3>
                    </form>
                </div>
            </li>

        </ul>
    </div>

<?php
}
?>