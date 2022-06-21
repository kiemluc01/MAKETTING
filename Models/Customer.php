<?php
class Customer extends Database{
    function getall(){
        $sql = "select * from tblkhachhang,tbllinhvuc,tblnguon where tblkhachhang.ID_LinhVuc = tbllinhvuc.ID_LinhVuc and tblkhachhang.ID_Nguon = tblnguon.ID_Nguon";
        $result =  mysqli_query($this->conn,$sql);
        return $result;
    }
}