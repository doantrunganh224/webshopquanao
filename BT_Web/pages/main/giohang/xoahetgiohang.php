<?php
    session_start();
    include "../../../admin/config/connect.php";
    //XÓA HẾT GIỎ HÀNG
    if(isset($_GET['xoatatca'])&& $_GET['xoatatca']=='xoahet'){
		unset($_SESSION['cart']);
		header('Location:cart.php');
	}

?>