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

if (isset($_POST['send_feedback'])) {
    // Retrieve the feedback
    $feedback = mysqli_real_escape_string($connect, $_POST['feedback']);

    // Check if the user is logged in
    if (isset($_SESSION['dangky'])) {
        // Get the user's ID and name
        $user_id = $_SESSION['id_khachhang'];
        $user_name = $_SESSION['dangky'];

        // Insert the feedback into the tbl_lienhe table
        $sql = "INSERT INTO tbl_lienhe (id_khachhang, hovaten, gopy) VALUES ('$user_id', '$user_name', '$feedback')";
        if (mysqli_query($connect, $sql)) {
            echo "<script>alert('Gửi phản hồi thành công!'); window.location.href='../../index.php';</script>";
        } else {
            echo "<script>alert('Có lỗi khi gửi phản hồi. Vui lòng thử lại.');</script>";
        }
    } else {
        echo "<script>alert('Bạn cần đăng nhập để gửi phản hồi.'); window.location.href='dangnhap.php';</script>";
    }
}
?>
