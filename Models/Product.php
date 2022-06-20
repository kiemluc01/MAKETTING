<?php
$connect = mysqli_connect("localhost", "root", "", "dapm1");
mysqli_query($connect, "SET NAMES 'utf8'");
if(isset($_REQUEST['idSP'])){
    $id = $_REQUEST['idSP'];
    $sql = "delete from tblsanpham where idSP = '".$id."'";
    if(mysqli_connect($this->conn,$sql)){
        $result = mysqli_connect($this->conn,"select * from tblsanpham");
        echo json_encode($result);
    }
}