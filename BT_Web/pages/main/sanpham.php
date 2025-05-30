 <?php 
    session_start();
    include("../../admin/config/connect.php");
    include("thongtin.php");
    include 'contact.php';
 ?>
 <?php
     $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
     $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
     
?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    } 
?>
 
 <?php
    $sql_chitiet ="SELECT * FROM tbl_ao,tbl_danhmuc WHERE tbl_ao.id_danhmuc=tbl_danhmuc.id_danhmuc  AND tbl_ao.id_ao='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($connect,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_detail.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Chill Buddy-Thời trang nam</title>
</head>
<body>
    <div class="site-wrapper">
        <!-- Header interface -->
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
                            <li> <a href="index.php?dangxuat=1">Đăng xuât</a></li>
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
                    <div class="header__actions" style="display: flex;
                        justify-content: space-evenly;
                        width: 250px;
                        align-items: center">
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
 <div class="product-display"> 
     <div class="product-content__left">
        <div class="product-content__left-main-img">
            <img src="../../admin/modules/quanlyao/uploads/<?php echo $row_chitiet['hinhanh']?>">
        </div>
     </div>
     <div class="product-content__right">
        <form action="../../pages/main/giohang/themgiohang.php?idao=<?php echo $row_chitiet['id_ao'] ?>" method="POST">
            <div class="product-content__right-product-name">
                <h1><?php echo $row_chitiet['tenao'] ?></h1>
                <p>Mã : <?php echo $row_chitiet['maao'] ?></p>
            </div>
            <div class="product-content__right-product-price">
                Giá : <?php echo number_format($row_chitiet['giaao'], 0, ',', '.') . ' vnd' ?>
            </div>
                <div class="product-content__right-product-quantity">
                <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
            </div>
                <div class="product-content__right-product-category">
                Danh mục : <?php echo $row_chitiet['tendanhmuc'] ?>
            </div>
            <div class="quantity">
                <input type="number" name="quantity" value="1" min="1" max="<?php echo $row_chitiet['soluong'] ?>">
                <p><input class="themgiohang" type="submit" name="themgiohang" value="Thêm Vào Giỏ Hàng"></p>
                
            </div>
        </form>
        <br>
        <div class="product-content__right-product-icon item">
            <a href="../tatcasanpham.php">Xem sản phẩm khác</a>
        </div>
       
    </div>
 </div>
 <?php
    }
 ?>
            <div class="product-content__bottom">
                <section class="homepage-products">
                    <div class="container">
                        <div class="homepage-products__headling">
                            <h2>SẢN PHẨM TƯƠNG TỰ</h2>
                        </div>
                        <div class="swiper-products__container swiper">
                            <div class="homepage-product__slider">
                                <?php include("slider_sanpham.php"); ?>

                                <div class="swiper-pagination"></div>
                                <div class="swiper-slide-button swiper-button-prev"></div>
                                <div class="swiper-slide-button swiper-button-next"></div>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                            <script src="../../js/slider.js"></script>
                            <script src="../../js/script.js"></script>
                        </div>
                </section>
            </div>
    
<footer>
    <div class="site-footer__sidebar">
        <p class="site-footer__title">Thành viên nhóm</p>
        <p class="site-footer__description">
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
</body>
</html>