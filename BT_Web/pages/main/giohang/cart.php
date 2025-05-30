<?php 
    session_start();
    include("../../../admin/config/connect.php");
    include("../thongtin.php");
    include '../contact.php';
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
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
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
                             <li> <a href="../dangnhap.php">Đăng nhập</a></li>
                             <li> <a href="../dangky.php">Đăng ký</a></li>
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
                        <a href="../../../index.php">
                            <img src="../../../img/logo.png" alt="Logo" class="header__logo">
                        </a>
                    </div>
                    <div class="nav__main-menu">
                        <ul class="nav__menu">
                            <li class="nav__menu-item">
                                <a href="">SẢN PHẨM</a>
                                <ul class="sub-menu">
                                    <li><a href="../../tatcasanpham.php">Tất cả sản phẩm</a></li>
                                    <li><a href="../../tatcasanphammoi.php">Sản phẩm mới</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ÁO NAM</a>
                                <ul class="sub-menu">
                                    <li><a href="../../tatcaaonam.php">Tất cả áo nam</a></li>
                                    <li><a href=""><?php
                                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){

                                ?>
                                <li><a href="../danhmuc.php?id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>



                                <?php
                                    }

                                ?></a>
                                    
                                </li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ĐỒ THỂ THAO</a>
                                <ul class="sub-menu">
                                    <li><a href="../danhmuc.php?id=6">Áo thể thao</a></li>
                                    <li><a href="../danhmuc.php?id=13">Áo tanktop</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">MẶC HẰNG NGÀY</a>
                                <ul class="sub-menu">
                                    <li><a href="../danhmuc.php?id=7">Áo thun</a></li>
                                    <li><a href="../danhmuc.php?id=12">Áo sơ mi</a></li>
                                    <li><a href="../danhmuc.php?id=5">Áo dài tay</a></li>
                                    <li><a href="../danhmuc.php?id=4">Áo polo</a></li>
                                </ul>
                            </li>
                            <li class="nav__menu-item">
                                <a href="">ĐỒ MÙA LẠNH</a>
                                <ul class="sub-menu">
                                    <li><a href="../danhmuc.php?id=16">Áo Sweater</a></li>
                                    <li><a href="../danhmuc.php?id=15">Áo Hoodie</a></li>
                                    <li><a href="../danhmuc.php?id=14">Áo khoác</a></li>
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
                                <img src="../../../img/icon-person1.png" alt="User">
                            </a>
                        </div>
                        <div class="header-actions-button">
                            <a href="cart.php">
                                <img src="../../../img/icon-shopping-basket1.png" alt="Basket">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
if (isset($_SESSION['dangky'])) {
    echo 'Xin chào: ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';
}
?>

<table border="2" style="width:100%; border-collapse: collapse; font-size: 18px; text-align: center;">
    <tr style="background-color: #f2f2f2;">
        <th>ID</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Hành động</th>
    </tr>

    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giaao'];
            $tongtien += $thanhtien;
            $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cart_item['masp']; ?></td>
                <td><?php echo $cart_item['tenao']; ?></td>
                <td><img src="../../../admin/modules/quanlyao/uploads/<?php echo $cart_item['hinhanh']; ?>" width="100" height="100"></td>
                <td>
                    <a href="suasoluong.php?cong=<?php echo $cart_item['id']; ?>" style="margin-right: 5px; font-size: 20px;"></a>
                    <?php echo $cart_item['soluong']; ?>
                    <a href="suasoluong.php?tru=<?php echo $cart_item['id']; ?>" style="margin-left: 5px; font-size: 20px;"></a>
                </td>
                <td><?php echo number_format($cart_item['giaao'], 0, ',', '.') . ' VNĐ'; ?></td>
                <td><?php echo number_format($thanhtien, 0, ',', '.') . ' VNĐ'; ?></td>
                <td><a href="xoasanpham.php?xoa=<?php echo $cart_item['id']; ?>" style="font-size: 18px; color: red;">Xóa</a></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td colspan="8" style="padding: 10px;">
                <p style="float: left; font-size: 20px;">Tổng tiền: <strong><?php echo number_format($tongtien, 0, ',', '.') . ' VNĐ'; ?></strong></p>
                <p style="float: right; font-size: 18px;"><a href="xoahetgiohang.php?xoatatca=xoahet" style="color: red; font-weight: bold;">Xóa Hết</a></p>
                <div style="clear: both; padding: 10px; text-align: center;">
                    <?php
                    if (isset($_SESSION['dangky'])) {
                        ?>
                        <p style="font-size: 30px; margin-top: 10px;"><a href="../thanhtoan/index.php?quanly=vanchuyen" style="color: green; font-weight: bold;">Đặt hàng</a></p>
                        <?php
                    } else {
                        ?>
                        <p style="font-size: 20px; margin-top: 10px;"><a href="../dangnhap.php" style="color: blue; font-weight: bold;">Đăng nhập để đặt hàng</a></p>
                        <?php
                    }
                    ?>
                </div>
            </td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
            <td colspan="8" style="padding: 20px; text-align: center; font-size: 20px; color: gray;">Hiện tại giỏ hàng trống</td>
        </tr>
        <?php
    }
    ?>
</table>

<div style="margin: 20px 0; ">
    <a href="../../../index.php" style="font-size: 15px; color: blue; font-weight: bold;">Tiếp tục mua sắm</a>
</div>

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