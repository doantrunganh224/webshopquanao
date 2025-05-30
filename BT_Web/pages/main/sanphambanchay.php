 <?php
    $sort_order = "DESC"; // Default is high-to-low
    if (isset($_GET['sort']) && $_GET['sort'] == 'asc') {
        $sort_order = "ASC"; // Low-to-high if selected
    }

    // Fetch only active products and apply sorting
    $sql_show_new = "SELECT * FROM tbl_ao, tbl_danhmuc 
                     WHERE tbl_ao.id_danhmuc = tbl_danhmuc.id_danhmuc 
                     AND tbl_ao.banchay = 1 
                     ORDER BY tbl_ao.giaao $sort_order 
                     LIMIT 8";
    $query_show_new = mysqli_query($connect, $sql_show_new);
   
?>

<ul class="product_list">
    <?php
        while ($row=mysqli_fetch_array($query_show_new)){
    ?>
        <li class="product">
            <a href="main/sanpham.php?id=<?php echo $row['id_ao'] ?>">
                <img src="../admin/modules/quanlyao/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="title_product"> <?php echo $row['tenao'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($row['giaao'],0,',','.').'vnd' ?></p>
                <p><?php echo $row['tendanhmuc']?></p>
            </a>

        </li>

    <?php
        }
    ?>
</ul>
