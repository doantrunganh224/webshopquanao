<!-- Include the CSS, HTML, and JavaScript for the popup in thongtin.php -->

<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none; /* Hidden by default */
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    
    .popup-content {
        background: #fff;
        padding: 20px;
        width: 50%;
        border-radius: 15px;
        text-align: center;
        position: relative;
    }
    .popup-content .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
</style>

<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h4>Thông tin cá nhân</h4>
        <?php
            if (isset($_SESSION['dangky'])) {
                echo 'Xin chào: <span style="color:red">' . $_SESSION['dangky'] . '</span>';
                $id = $_SESSION['dangky'];
                $sql_thongtin = "SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
                $query_thongtin = mysqli_query($connect, $sql_thongtin);
                $row = mysqli_fetch_array($query_thongtin);
        ?>
            <p>Họ và tên: <?php echo $row['hovaten']; ?></p>
            <p>Email: <?php echo $row['email']; ?></p>
            <p>Địa chỉ: <?php echo $row['diachi']; ?></p>
            <p>Số điện thoại: <?php echo $row['sodienthoai']; ?></p>
        <?php
            } else {
                echo '<p>Vui lòng đăng nhập để xem thông tin cá nhân.</p>';
            }
        ?>
    </div>
</div>

<script>
    // Function to show the popup
    function showPopup() {
        document.getElementById("popupOverlay").style.display = "flex";
    }

    // Function to close the popup
    function closePopup() {
        document.getElementById("popupOverlay").style.display = "none";
    }
</script>
