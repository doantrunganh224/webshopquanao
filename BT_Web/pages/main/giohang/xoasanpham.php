<?php
    session_start();
    include "../../../admin/config/connect.php";
   
    //XÓA SẢN PHẨM
    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                //thiết lập lại session 
                $product[]= array('tenao'=>$cart_item['tenao'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giaao'=>$cart_item['giaao'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                
            }
        $_SESSION['cart']=$product;
        header('Location:cart.php');
        }
		
	}

?>