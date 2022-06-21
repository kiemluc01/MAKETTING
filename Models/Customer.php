<?php
class Customer extends Database{
    function getall(){
        $sql = "select * from tblkhachhang";
        $result =  mysqli_query($this->conn,$sql);
        return $result;
    }
}