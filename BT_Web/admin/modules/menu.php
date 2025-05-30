

<ul class="admincp_list">
    
    <li><a href="index.php?action=quanlyao&query=them">Quản lý Áo </a></li>

    <?php
        if(isset($_SESSION['dangnhap'])){
            if($_SESSION['dangnhap']=='admin'){
    ?>
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục áo </a></li>
        <li><a href="index.php?action=quanlynguoidung&query=them">Quản lý người dùng</a></li>
        
    <?php

            }
       }
    
    ?>
    <li><a href="index.php?action=quanlydonhang&query=them">Quản lý đơn hàng </a></li>
</ul>