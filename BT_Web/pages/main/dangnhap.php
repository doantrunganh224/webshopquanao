<?php
// Start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "qlbh";

// Create a connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_errno) {
    echo "Lỗi kết nối: " . $connect->connect_error;
    exit();
}

// Handle login submission
if (isset($_POST['dangnhap'])) {
    $taikhoan = mysqli_real_escape_string($connect, $_POST['taikhoan']);
    $matkhau = md5($_POST['password']); // Ensure passwords are hashed

    // Query to check credentials
    $sql = "SELECT * FROM tbl_dangky, tbl_admin WHERE taikhoan='$taikhoan' AND matkhau='$matkhau' LIMIT 1";
    $result = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $row_data = mysqli_fetch_array($result);
        $_SESSION['dangky'] = $row_data['taikhoan'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_khachhang'] = $row_data['id_khachhang'];

        // Redirect to the main page after successful login
        header("Location: ../../");
        exit();
    } elseif ($taikhoan == 'admin') {
        header("Location: ../../admin/login.php");
        exit();
    } else {
        echo '<p style="color:red">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
</head>
<body>
   
    <div class="warpper">
    <form action="" method="POST">
        <h1>LOGIN</h1>
       <div class="taikhoan">
           <label for=""> Tài Khoản</label><br>
           <input type="text" name="taikhoan">
       </div>

       <div class="matkhau">
           <label for=""> Mật khẩu</label><br>
           <input type="password" name="password">
       </div>
       <div>
           <input type="submit" name="dangnhap" value="Đăng Nhập">
       </div>
    </form>
    </div>

    
</body>
</html>