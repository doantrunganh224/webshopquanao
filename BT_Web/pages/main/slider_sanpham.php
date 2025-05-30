<?php
    // GET id là lấy id từ bên trang chinh 
    $sql_show ="SELECT * FROM tbl_ao WHERE tbl_ao.id_danhmuc IN (4, 5, 6, 7, 12, 13, 14, 15, 16) ORDER BY id_ao DESC";
    $query_show =mysqli_query($connect,$sql_show);
   
    //get ten danh muc
    $sql_cate ="SELECT * FROM tbl_danhmuc WHERE id_danhmuc IN (4, 5, 6, 7, 12, 13, 14, 15, 16)";
    $query_cate =mysqli_query($connect,$sql_cate);
    $row_title =mysqli_fetch_array($query_cate);
?>

<ul class="slick-list swiper-wrapper" style="max-height: 450px;">
    <?php
        while($row_pro=mysqli_fetch_array($query_show)){
    ?>
            <li class="slick-item swiper-slide"> 
                <a href="sanpham.php?id=<?php echo $row_pro['id_ao'] ?>" class="slick-link">
                    <img src="../../admin/modules/quanlyao/uploads/<?php echo $row_pro['hinhanh'] ?>" class="slick-img">
                    <p class="title_product"> <?php echo $row_pro['tenao'] ?></p>
                    <p class="price_product">Giá: <?php echo number_format($row_pro['giaao'],0,',','.').'vnd' ?></p>
                </a>
            </li>
    <?php
        }
    ?>
</ul>
