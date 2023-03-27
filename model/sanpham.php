<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="insert into product(name_product,price,img,description,id_dmuc) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from product where id_product=".$id;
    pdo_execute($sql);}

function loadall_sanpham_home(){
    $sql="select*from product where 1 order by id_product desc limit 10";
  
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select*from product where 1 order by view desc limit 0,10";
  
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_sp_top5(){
    $sql="select*from product where 1 order by view desc limit 0,5";
  
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw,$iddm){
    $sql="select*from product where 1";
    if($kyw!=""){
        $sql.=" and name_product like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and id_dmuc ='".$iddm."'";
    }
    $sql.=" order by id_product desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
    }
function loadone_sanpham($id){
    $sql="select*from product where id_product=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select*from category where id_category=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name_category;
    }else{
        return "";
    }
    
}
function load_sanpham_cungloai($id,$iddm){
    $sql="select*from product where id_dmuc=".$iddm." AND id_product <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
        $sql="update product set id_dmuc='".$iddm."', name_product='".$tensp."',price='".$giasp."',description='".$mota."',img='".$hinh."' where id_product=".$id;
    else
        $sql="update product set id_dmuc='".$iddm."', name_product='".$tensp."',price='".$giasp."',description='".$mota."' where id_product=".$id;
    pdo_execute($sql);
}
function load_sp_cungloai($id){
    $sql="SELECT * FROM `product` WHERE id_product <>".$id;
    $listsp = pdo_query($sql);
    return  $listsp;
}
?>
