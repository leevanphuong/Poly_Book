<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="insert into comment(content,id_user,id_pro,date) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    
    $sql="select*from comment where 1 ";
    if($idpro>0) $sql.="AND id_pro='".$idpro."'";
    
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql="delete from comment where id_cmt=".$id;
    pdo_execute($sql);}
?>