<?php
    include "../../config/connect.php";
    $tenao=$_POST['tenao'];
    $maao=$_POST['maao'];
    $giaao=$_POST['giaao'];
    $soluong=$_POST['soluong'];
     //xử lý hình anh
    $file=$_FILES['hinhanh'];
    $hinhanh=$file['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanhgio=time().'_'.$hinhanh;
    $mieuta=$_POST['mieuta'];
    $danhmuc=$_POST['danhmuc'];
    
   

    

    if(isset($_POST['themsanpham'])){


        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                
                $sql_themsp="INSERT INTO tbl_ao(tenao,maao,giaao,soluong,hinhanh,mieuta,id_danhmuc) 
                VALUE ('".$tenao."','".$maao."','".$giaao."','".$soluong."','".$hinhanh."','".$mieuta."','".$danhmuc."')";
                mysqli_query($connect,$sql_themsp);
                header('Location:../../index.php?action=quanlyao&query=them');
        
            }else{
                $hinhanh='';
                header('Location:../../index.php?action=quanlyao&query=them');
            }
        }
       

    }
    
    
    
    
    
    elseif(isset($_POST['suasanpham'])){
        if($hinhanh!=''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_sua="UPDATE tbl_ao SET tenao='".$tenao."',maao='".$maao."',
            giaao='".$giaao."',soluong='".$soluong."',hinhanh='".$hinhanh."',
            mieuta='".$mieuta."',id_danhmuc='".$danhmuc."' WHERE id_ao='$_GET[idao]'";
            
            $sql="SELECT*FROM tbl_sanpham WHERE id_ao='$_GET[idao]' LIMIT 1";
            $query=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        
        }else{
            $sql_sua="UPDATE tbl_ao SET tenao='".$tenao."',maao='".$maao."',
            giaao='".$giaao."',soluong='".$soluong."',mieuta='".$mieuta."',
            id_danhmuc='".$danhmuc."' WHERE id_ao='$_GET[idao]'";
        }  
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlyao&query=them');
    }
    
    
    
    
    else{
        
        $id=$_GET['idao'];
        $sql="SELECT *FROM tbl_ao WHERE id_ao = '$id' LIMIT 1";
        $query=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa="DELETE FROM tbl_ao WHERE id_ao ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlyao&query=them');
    }
?>