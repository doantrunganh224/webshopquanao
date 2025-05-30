<?php
    // GET id là lấy id từ bên main.php 
    $sql_show ="SELECT * FROM tbl_ao WHERE tbl_ao.id_danhmuc IN (5, 7) ORDER BY id_ao DESC";
    $query_show =mysqli_query($connect,$sql_show);
   
    //get ten danh muc
    $sql_cate ="SELECT * FROM tbl_danhmuc WHERE id_danhmuc IN (5, 7)";
    $query_cate =mysqli_query($connect,$sql_cate);
    $row_title =mysqli_fetch_array($query_cate);
?>

<ul class="slick-list swiper-wrapper">
    <?php
        while($row_pro=mysqli_fetch_array($query_show)){
    ?>
            <li class="slick-item swiper-slide"> 
                <a href="pages/main/sanpham.php?id=<?php echo $row_pro['id_ao'] ?>" class="slick-link">
                    <img src="admin/modules/quanlyao/uploads/<?php echo $row_pro['hinhanh'] ?>" class="slick-img">
                    <p class="title_product"> <?php echo $row_pro['tenao'] ?></p>
                    <p class="price_product">Giá: <?php echo number_format($row_pro['giaao'],0,',','.').'vnd' ?></p>
                </a>
            </li>
    <?php
        }
    ?>
</ul>
