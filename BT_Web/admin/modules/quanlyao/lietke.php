

<?php
    
    
    $sql_lietke_sp="SELECT * FROM tbl_ao ,tbl_danhmuc WHERE tbl_ao.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_ao DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
<p>Liệt kê danh mục áo</p>
 <table style="width: 100%;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <td>ID</td>
         <td>Tên sản phảm</td>
         <td>Hình ảnh </td>
         <td>Giá sản phẩm</td>
         <td>Số lượng</td>
         <td>Danh mục</td>
         <td>Mã sản phẩm</td>
         <td>Miêu tả</td>
         <td>Quản lý</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td style="width:80px;height:150px; text-align: center;">
                            <?php echo $row['tenao'] ?>   
         </td>
         
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlyao/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center;">
                            <?php echo number_format($row['giaao'],0,',','.').'VNĐ'  ?>   
         </td>
         <td><?php echo $row['soluong'] ?>      </td>
         <td><?php echo $row['tendanhmuc'] ?>      </td>
         <td><?php echo $row['maao'] ?>    </td>
         <td><?php echo $row['mieuta'] ?>       </td>
         <td>
            <a href="modules/quanlyao/xuly.php?idao=<?php echo $row['id_ao']?>">Xóa</a>|
             <a href="?action=quanlyao&query=sua&idao=<?php echo $row['id_ao']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>