<?php
class Demand extends Database{
    function getall(){
        $sql = "select * from tblnhucau";
        $result =  mysqli_query($this->conn,$sql);
        return $result;
    }
}