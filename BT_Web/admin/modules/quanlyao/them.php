 <p>Thêm mẫu áo</p>
 <table border="1" width="50%" style="border-collapse: collapse;">
   <form method="POST" action="modules/quanlyao/xuly.php" enctype="multipart/form-data">
    <tr>
        <th colspan="2">Điền thông tin áo</th>
    </tr>
    <tr>
        <td>Tên áo</td>
        <td><input type="text" name="tenao" ></td>
    </tr>
    <tr>
        <td>Mã áo</td>
        <td><input type="text" name="maao" ></td>
    </tr>
    <tr>
        <td>Giá</td>
        <td><input type="number" name="giaao" ></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" ></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh" ></td>
        
    </tr>
    <tr>
        <td>Miêu tả</td>
        <td> <textarea name="mieuta" rows="5"  cols="50" style="resize: none;"></textarea> </td>
    </tr>
    <tr>
        <td>Danh mục áo</td>
        <td>
          <select name="danhmuc">
                <?php
                    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            

                <?php
                    }
                ?>
          </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
    </tr>
</form>
 </table>