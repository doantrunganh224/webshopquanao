<div class="clear"></div>
<div class="main">
<?php 
                        
                        if(isset($_GET['action']) && $_GET['query']){                        
                            $bientam=$_GET['action'];
                            $query =$_GET['query'];
                        }else{
                            $bientam='';
                            $query='';
                        }
                        if ($bientam=='quanlydanhmucsanpham' && $query=='them'){
                            include("modules/quanlydanhmucao/them.php");
                            include("modules/quanlydanhmucao/lietke.php");

                        }elseif($bientam=='quanlydanhmucsanpham' && $query=='sua'){
                            include("modules/quanlydanhmucao/sua.php");

                        }elseif($bientam=='quanlyao' && $query=='them'){
                            include("modules/quanlyao/them.php");
                            include("modules/quanlyao/lietke.php");

                        }elseif($bientam=='quanlyao' && $query=='sua'){
                            include("modules/quanlyao/sua.php");

                        }elseif($bientam=='quanlynguoidung' && $query=='them' ){
                            include("modules/quanlynguoidung/lietke.php");
                            
                        }elseif($bientam=='quanlynguoidung' && $query=='sua'){
                            include("modules/quanlynguoidung/sua.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='them' ){
                            include("modules/quanlydonhang/lietke.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='sua'){
                            include("modules/quanlydonhang/sua.php");
                            
                        }elseif($bientam=='quanlydonhang' && $query=='xemdonhang'){
                            include("modules/quanlydonhang/xemdonhang.php");
                            
                        }elseif($bientam=='dangxuat'){
                            include("../login.php");
                        }
                        else{
                            include("modules/dashboard.php");
                        }
                    ?>
</div>