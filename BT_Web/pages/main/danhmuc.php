<?php 
    session_start();
    include("../../admin/config/connect.php");
    include("thongtin.php");
    include 'contact.php';
 ?>
 <?php
    //lay id 
     $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
     $query_danhmuc=mysqli_query($connect,$sql_danhmuc);  
?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    } 
?>
 <?php
    // GET id là lấy id o tren 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        echo "Category ID is missing!";
        exit;
    }

    // Fetch products by category
    $sql_show = "SELECT * FROM tbl_ao WHERE tbl_ao.id_danhmuc='$id' ORDER BY id_ao DESC";
    $query_show = mysqli_query($connect, $sql_show);

    // Get category name
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$id' LIMIT 1";
    $query_cate = mysqli_query($connect, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

    // Sorting setup
    $sort_order = "DESC";
    if (isset($_GET['sort']) && $_GET['sort'] == 'asc') {
        $sort_order = "ASC";
    }

    // Pagination setup
    $page = isset($_GET['trang']) ? $_GET['trang'] : 1;
    $begin = ($page == 1) ? 0 : ($page * 10) - 10;

    // Query to fetch sorted and paginated products by category
    $sql_show = "SELECT * FROM tbl_ao 
                 WHERE id_danhmuc='$id' 
                 ORDER BY giaao $sort_order 
                 LIMIT $begin,10";
    $query_show = mysqli_query($connect, $sql_show);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ sưu tập-Chill Buddy</title>
    <link rel="stylesheet" href="../../css/style_sanpham.css">
    <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
    <style type="text/css">
    
    </style>
</head>
<body>
    <div class="site-wrapper">
        <!-- Site Header -->
        <div class="site-header">
            <div class="topbar">
                <ul class="nav-main">
                    <li class="nav-main__item">
                        <a href="#" onclick="showPopupCustom()">Trung tâm CSKH</a>
                    </li>
                    <li class="nav-main__item">
                        <?php
                            if(isset($_SESSION['dangky'])){
                        ?>
                           
                            <li><a href="#" onclick="showPopup()">Thông Tin</a></li>
                            <li> <a href="../../index.php?dangxuat=1">Đăng xuât</a></li>
                        <?php
                            }else{
                        ?>
                             <li> <a href="dangnhap.php">Đăng nhập</a></li>
                             <li> <a href="dangky.php">Đăng ký</a></li>
                        <?php
                            }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="topbar-promotion">
                <p>Spiderman shirt is now available</p>
            </div>
            <div class="header">
                <div class="header__inner">
                    <div class="header__logo">
                        <a href="../../index.php">
                            <img src="../../img/logo.png" alt="Logo" class="header__logo">
                        </a>
                    </div>
                    <div class="nav__main-menu">
                        <ul class="nav__menu">
                            <li class="nav__menu-item">
                                <a href="">SẢN PHẨM</a>
                                <ul class="sub-menu">
                                    <li><a href="../tatcasanpham.php">Tất cả sản phẩm</a></li>
                                    <li><a href="../tatcasanphammoi.php">Sản phẩm mới</a></li>
                                    <li><a href="../tatcaaobanchay.php">Hàng bán chạy</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ÁO NAM</a>
                                <ul class="sub-menu">
                                    <li><a href="../tatcaaonam.php">Tất cả áo nam</a></li>
                                    <li><a href=""><?php
                                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){

                                ?>
                                <li><a href="danhmuc.php?id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>

                                <?php
                                    }

                                ?></a>
                                    
                                </li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ĐỒ THỂ THAO</a>
                                <ul class="sub-menu">
                                    <li><a href="danhmuc.php?id=6">Áo thể thao</a></li>
                                    <li><a href="danhmuc.php?id=13">Áo tanktop</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">MẶC HẰNG NGÀY</a>
                                <ul class="sub-menu">
                                    <li><a href="danhmuc.php?id=7">Áo thun</a></li>
                                    <li><a href="danhmuc.php?id=12">Áo sơ mi</a></li>
                                    <li><a href="danhmuc.php?id=5">Áo dài tay</a></li>
                                    <li><a href="danhmuc.php?id=4">Áo polo</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ĐỒ MÙA LẠNH</a>
                                <ul class="sub-menu">
                                    <li><a href="danhmuc.php?id=16">Áo Sweater</a></li>
                                    <li><a href="danhmuc.php?id=15">Áo Hoodie</a></li>
                                    <li><a href="danhmuc.php?id=14">Áo khoác</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__actions" style="width: 250px">
                        <div class="header-actions-button">
                            <a href="#" onclick="showPopup()">
                                <img src="../../img/icon-person1.png" alt="User">
                            </a>
                        </div>
                        <div class="header-actions-button">
                            <a href="giohang/cart.php">
                                <img src="../../img/icon-shopping-basket1.png" alt="Basket">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Site Category -->
     <section class="category">
        <div class="container">
            <div class="category-top row">
                <p>Trang chủ</p> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
                <p><?php 
                                if(isset($row_title['tendanhmuc'])){
                                    echo $row_title['tendanhmuc'];
                                }else{
                                    echo "lỗi không lấy được data";
                                }
                    ?>  
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="category-left">
                    <ul>
                        <li class="category-left-li"><a href="#">SẢN PHẨM</a>
                            <ul>
                                <li>
                                    <a href="../tatcasanpham.php">Tất cả sản phẩm</a>
                                </li>
                                <li><a href="../tatcasanphammoi.php">Sản phẩm mới</a></li>
                                <li><a href="../tatcaaobanchay.php">Hàng bán chạy</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li">
                            <a href="#">ÁO</a>
                            <ul>
                                <li><a href="../tatcaaonam.php">Tất cả áo nam</a></li>
                                <li><a href="main/danhmuc.php?id=12">Áo sơ mi</a></li>
                                <li><a href="main/danhmuc.php?id=7">Áo thun</a></li>
                                <li><a href="main/danhmuc.php?id=6">Áo thể thao</a></li>
                                <li><a href="main/danhmuc.php?id=5">Áo dài tay</a></li>
                                <li><a href="main/danhmuc.php?id=4">Áo polo</a></li>
                                <li><a href="danhmuc.php?id=13">Áo tanktop</a></li>
                                <li><a href="danhmuc.php?id=14">Áo khoác</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="#">ĐỒ THỂ THAO</a>
                            <ul>
                                <li><a href="danhmuc.php?id=6">Áo thể thao</a></li>
                                <li><a href="danhmuc.php?id=13">Áo tanktop</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="#">MẶC HẰNG NGÀY</a>
                            <ul>
                                <li><a href="danhmuc.php?id=7">Áo thun</a></li>
                                <li><a href="danhmuc.php?id=12">Áo sơ mi</a></li>
                                <li><a href="danhmuc.php?id=5">Áo dài tay</a></li>
                                <li><a href="danhmuc.php?id=4">Áo polo</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="#">ĐỒ MÙA LẠNH</a>
                             <ul>
                                <li><a href="danhmuc.php?id=16">Áo Sweater</a></li>
                                <li><a href="danhmuc.php?id=15">Áo Hoodie</a></li>
                                <li><a href="danhmuc.php?id=14">Áo khoác</a></li>
                            </ul>
                        </li>
                    </ul>
                    <script src="../../js/script.js"></script>
                </div>
                <div class="category-right row">
                    <div class="category-right__top-item">
                        <p>Danh mục : 
                        <?php 
                                if(isset($row_title['tendanhmuc'])){
                                    echo $row_title['tendanhmuc'];
                                }else{
                                    echo "lỗi không lấy được data";
                                }
                        ?></p>
                    </div>
                    <div class="category-right__top-item">
                        <form action="" method="GET">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <select name="sort" onchange="this.form.submit()">
                                <option value="">Sắp xếp</option>
                                <option value="desc" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'desc') echo 'selected'; ?>>Giá cao đến thấp</option>
                                <option value="asc" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'asc') echo 'selected'; ?>>Giá thấp đến cao</option>
                            </select>
                        </form>
                    </div>

                    <div class="category-main__content row">
                        <ul class="product_list">
                            <?php
                                while($row_pro=mysqli_fetch_array($query_show)){
                            ?>
                                <li class="product"> 
                                    <a href="sanpham.php?id=<?php echo $row_pro['id_ao'] ?>">
                                        <img src="../../admin/modules/quanlyao/uploads/<?php echo $row_pro['hinhanh'] ?>">
                                        <p class="title_product"> <?php echo $row_pro['tenao'] ?></p>
                                        <p class="price_product">Giá: <?php echo number_format($row_pro['giaao'],0,',','.').'vnd' ?></p>
                                    </a>
                                </li>
                            <?php
                                }
                            ?>
                                           
                        </ul>

                    </div>
                    
                </div>
                
            </div>
        </div>
     </section>
</body>

<!-- Site Footer -->
<footer>
    <div class="site-footer__sidebar">
        <p class="site-footer__title" style="color: #C6E7FF;">Thành viên nhóm</p>
        <p class="site-footer__description" style="color: #C6E7FF; ">
            Nguyễn Anh Sơn - 21103200069 - 8/9/2003
            Đỗ Mạnh Thường - 21103200120 - 3/6/2003
            Liêu Anh Tú - 21103200110 - 18/5/2003
        </p>
    </div>
</footer>
<script>
    let lastScroll = 0;
    const stickyElement = document.querySelector('.site-header');

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > lastScroll) {
            // Cuộn xuống
            stickyElement.classList.add('hidden');
        } else {
            // Cuộn lên
            stickyElement.classList.remove('hidden');
        }

        lastScroll = currentScroll;
    });
</script>
</html>
