<?php
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*2)-3;
    }
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,9";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>

<h1 class="Genshin">Sản phẩm mới nhất</h1>
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
<div style="clear:both;"></div>
<style type="text/css">
    ul.list_trang{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    ul.list_trang li {
        float: left;
        padding: 5px 13px;
        margin: 5px;
        background: burlywood;
        display: block;
    }
    ul.list_trang li a{
        color: #000;
        text-align: center;
        text-decoration: none;
    }
</style>
<?php
$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count/4);
?>
<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?></p>

<ul class="list_trang">
    <?php
    for($i=1;$i<=$trang;$i++){
    ?>
            <li <?php if($i==$page){echo 'style="background: brown;"';}else{echo'';} ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php
        }
        ?>
    
    
</ul>