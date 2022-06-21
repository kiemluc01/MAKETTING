<?php
class getProduct extends Database{
    function getall(){
        $sql = "select * from tblsanpham,tblhinhanh,tblnhucau where tblsanpham.ID_hinhanh = tblhinhanh.ID_hinhanh and tblsanpham.ID_nhucau =tblnhucau.ID_nhucau";
        $result =  mysqli_query($this->conn,$sql);
        return $result;
    }
}