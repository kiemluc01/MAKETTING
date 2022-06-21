<?php
class Work extends Database{
    function getall(){
        $sql = "select * from tblcongviec";
        $result =  mysqli_query($this->conn,$sql);
        return $result;
    }
}