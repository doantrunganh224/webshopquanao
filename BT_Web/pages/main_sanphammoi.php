 <?php
    // GET id là lấy id từ bên MENU.php 
    $sql_show_new ="SELECT * FROM tbl_ao,tbl_danhmuc WHERE tbl_ao.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_ao.trangthai=1 ORDER BY tbl_ao.id_ao  DESC LIMIT 5";
    $query_show_new =mysqli_query($connect,$sql_show_new);
   
   
?>

<ul class="slick-list swiper-wrapper">
    <?php
        while ($row=mysqli_fetch_array($query_show_new)){
    ?>
        <li class="slick-item swiper-slide">
            <a href="pages/main/sanpham.php?id=<?php echo $row['id_ao'] ?>" class="slick-link">
                <img src="admin/modules/quanlyao/uploads/<?php echo $row['hinhanh'] ?>" class="slick-img">
                <p class="title_product"> <?php echo $row['tenao'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($row['giaao'],0,',','.').'vnd' ?></p>
                <p><?php echo $row['tendanhmuc']?></p>
            </a>

        </li>

    <?php
        }
    ?>
</ul>
