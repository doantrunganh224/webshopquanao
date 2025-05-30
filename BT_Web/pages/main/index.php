<?php
    if (isset($_GET['sort']) && $_GET['sort'] == 'asc') {
            $sort_order = "ASC";
        } else {
            $sort_order = "DESC";
        }

        // Pagination logic 12 san pham 1 trang
        $page = isset($_GET['trang']) ? $_GET['trang'] : 1;
        $begin = ($page == 1) ? 0 : ($page * 12) - 12;

        // Fetch product data with sorting and pagination
        $sql_show = "SELECT * FROM tbl_ao, tbl_danhmuc 
                     WHERE tbl_ao.id_danhmuc = tbl_danhmuc.id_danhmuc 
                     ORDER BY tbl_ao.giaao $sort_order 
                     LIMIT $begin,12";
        $query_show = mysqli_query($connect, $sql_show);
?>
<div class="content-wrapper">
    <ul class="product_list">
        <?php
            while ($row = mysqli_fetch_array($query_show)) {
        ?>
            <li class="product">
                <a href="main/sanpham.php?id=<?php echo $row['id_ao']; ?>">
                    <img src="../admin/modules/quanlyao/uploads/<?php echo $row['hinhanh'] ?>" alt="Product Image">
                    <p class="product-name"><?php echo $row['tenao'] ?></p>
                    <h3 class="product-price">Giá: <?php echo number_format($row['giaao'], 0, ',', '.') . ' VND' ?></h3>
                    <p><?php echo $row['tendanhmuc'] ?></p>
                </a>
            </li>
        <?php
            }
        ?>
    </ul>

    <!-- Pagination -->
    <div style="clear:both;"></div>
    <ul class="list_trang">
        <?php
            $sql_trang = mysqli_query($connect, "SELECT * FROM tbl_ao");
            $row_count = mysqli_num_rows($sql_trang);
            $trang = ceil($row_count / 12); //chia ra 1 trang co 12 san pham
            for($i = 1; $i <= $trang; $i++) { 
        ?>
            <li <?php if($i == $page){ echo 'style="background: brown;"'; } ?>>
                <a href="?trang=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
        <?php
            } 
        ?>
    </ul>
</div>
