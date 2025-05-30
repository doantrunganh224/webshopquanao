<?php
session_start();
include "../../../admin/config/connect.php";

if (isset($_POST['themgiohang'])) {
    $id = $_GET['idao'];
    $soluong = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1; // Get the submitted quantity or default to 1

    $sql = "SELECT * FROM tbl_ao WHERE id_ao='" . $id . "' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);

    if ($row) {
        $new_product = array(
            array(
                'tenao' => $row['tenao'],
                'id' => $id,
                'soluong' => $soluong, // Use submitted quantity
                'giaao' => $row['giaao'],
                'hinhanh' => $row['hinhanh'],
                'masp' => $row['maao']
            )
        );

        if (isset($_SESSION['cart'])) {
            $found = false;
            $product = array(); // Initialize product array

            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['id'] == $id) {
                    // Update quantity for existing item
                    $product[] = array(
                        'tenao' => $cart_item['tenao'],
                        'id' => $cart_item['id'],
                        'soluong' => $cart_item['soluong'] + $soluong, // Add the new quantity
                        'giaao' => $cart_item['giaao'],
                        'hinhanh' => $cart_item['hinhanh'],
                        'masp' => $cart_item['masp']
                    );
                    $found = true;
                } else {
                    // Keep other items unchanged
                    $product[] = $cart_item;
                }
            }

            if (!$found) {
                // If item was not found, add as new product
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                // Update cart with modified product list
                $_SESSION['cart'] = $product;
            }
        } else {
            // If cart is empty, initialize with the new product
            $_SESSION['cart'] = $new_product;
        }
    }

    header('Location: ../../main/giohang/cart.php');
}
