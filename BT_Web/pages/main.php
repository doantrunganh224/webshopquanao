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
    include 'pages/main/thongtin.php';
    include 'pages/main/contact.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
                             <li> <a href="pages/main/dangnhap.php">Đăng nhập</a></li>
                             <li> <a href="pages/main/dangky.php">Đăng ký</a></li>
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
                        <a href="index.php">
                            <img src="img/logo.png" alt="Logo" class="header__logo">
                        </a>
                    </div>
                    <div class="nav__main-menu">
                        <ul class="nav__menu">
                            <li class="nav__menu-item">
                                <a href="">SẢN PHẨM</a>
                                <ul class="sub-menu">
                                    <li><a href="pages/tatcasanpham.php">Tất cả sản phẩm</a></li>
                                    <li><a href="pages/tatcasanphammoi.php">Sản phẩm mới</a></li>
                                    <li><a href="pages/tatcaaobanchay.php">Hàng bán chạy</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ÁO NAM</a>
                                <ul class="sub-menu">
                                    <li><a href="pages/tatcaaonam.php">Tất cả áo nam</a></li>
                                    <li><a href=""><?php
                                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){

                                ?>
                                <li><a href="pages/main/danhmuc.php?id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>



                                <?php
                                    }

                                ?></a>
                                    
                                </li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ĐỒ THỂ THAO</a>
                                <ul class="sub-menu">
                                    <li><a href="pages/main/danhmuc.php?id=6">Áo thể thao</a></li>
                                    <li><a href="pages/main/danhmuc.php?id=13">Áo tanktop</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">MẶC HẰNG NGÀY</a>
                                <ul class="sub-menu">
                                    <li><a href="pages/main/danhmuc.php?id=7">Áo thun</a></li>
                                    <li><a href="pages/main/danhmuc.php?id=12">Áo sơ mi</a></li>
                                    <li><a href="pages/main/danhmuc.php?id=5">Áo dài tay</a></li>
                                    <li><a href="pages/main/danhmuc.php?id=4">Áo polo</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ĐỒ MÙA LẠNH</a>
                                <ul class="sub-menu">
                                    <li><a href="pages/main/danhmuc.php?id=16">Áo Sweater</a></li>
                                    <li><a href="pages/main/danhmuc.php?id=15">Áo Hoodie</a></li>
                                    <li><a href="pages/main/danhmuc.php?id=14">Áo khoác</a></li>
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
                                <img src="img/icon-person1.png" alt="User">
                            </a>
                        </div>
                        <div class="header-actions-button">
                            <a href="pages/main/giohang/cart.php">
                                <img src="img/icon-shopping-basket1.png" alt="Basket">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Homepage interface -->
        <div class="site-homepage">
            <section class="homepage-banner">
                <div class="aspect-ratio-169">
                    <img src="img/home-banner3.png" alt="">
                    <img src="img/home-banner4.png" alt="">
                    <img src="img/home-banner5.png" alt="">
                </div>
                <div class="dot-container">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </section>
            <section class="homepage-products">
                <div class="container">
                    <div class="homepage-products__tab">
                        <div class="head-left">
                            <a href="pages/tatcasanphammoi.php">Sản phẩm mới</a>
                        </div>
                        <span>
                            <a href="">Xem thêm</a>
                        </span>
                    </div>
                    <div class="swiper-products__container swiper">
                        <div class="homepage-product__slider">
                            <?php include("main_sanphammoi.php"); ?>

                            <div class="swiper-pagination"></div>
                            <div class="swiper-slide-button swiper-button-prev"></div>
                            <div class="swiper-slide-button swiper-button-next"></div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                    <script src="js/slider.js"></script>
                    <script src="js/script.js"></script>
                </div>
            </section>
            <section class="banner-block">
                <div class="banner-41">
                    <img src="img/casual-banner.png" alt="">
                </div>
            </section>
            <section class="homepage-products">
                <div class="container">
                    <div class="homepage-products__headling">
                        <h2>ĐỒ MẶC HÀNG NGÀY</h2>
                    </div>
                    <div class="swiper-products__container swiper">
                        <div class="homepage-product__slider">
                            <?php include("main_hangngay.php"); ?>

                            <div class="swiper-pagination"></div>
                            <div class="swiper-slide-button swiper-button-prev"></div>
                            <div class="swiper-slide-button swiper-button-next"></div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                        <script src="js/slider.js"></script>
                    </div>
            </section>
            <section class="banner-block">
                <div class="banner-41">
                    <img src="img/sport-banner.png" alt="">
                </div>
            </section>
            <section class="homepage-products">
                <div class="container">
                    <div class="homepage-products__headling">
                        <h2>ĐỒ THỂ THAO</h2>
                    </div>
                    <div class="swiper-products__container swiper">
                        <div class="homepage-product__slider">
                            <?php include("main_thethao.php"); ?>

                            <div class="swiper-pagination"></div>
                            <div class="swiper-slide-button swiper-button-prev"></div>
                            <div class="swiper-slide-button swiper-button-next"></div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                        <script src="js/slider.js"></script>
                    </div>
            </section>
        </div>
    </div>
</body>
<footer>
    <div class="site-footer__sidebar">
        <p class="site-footer__title">Thành viên nhóm</p>
        <p class="site-footer__description">
            Nguyễn Anh Sơn - 21103200069 - 8/9/2003
            Đỗ Mạnh Thường - 21103200120 - 3/6/2003
            Liêu Anh Tú - 21103200110 - 18/05/2003
        </p>
    </div>
</footer>
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let text = 0;
    imgPosition.forEach(function (img, text) {
        img.style.left = text * 100 + "%";
        dotItem[text].addEventListener("click", function () {
            slider(text)
        })
    })
    function imgSlide() {
        text++;
        if (text >= imgNumber) {
            text = 0;
        }
        slider(text)

    }
    function slider(text) {
        imgContainer.style.left = "-" + text * 100 + "%"
        const dotActive = document.querySelector(".active")
        dotActive.classList.remove("active")
        dotItem[text].classList.add("active")
    }
    setInterval(imgSlide, 5000)

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