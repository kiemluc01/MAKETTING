<?php
$connect = mysqli_connect("localhost", "root", "", "marketing");
mysqli_query($connect, "SET NAMES 'utf8'");
if (isset($_REQUEST['pass']) && isset($_REQUEST['user'])) {
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    // $user = "luc01";
    // $pass = "123";
    $sql = "select * from tbltaikhoan where TaiKhoan ='" . $user . "' and MatKhau = '".$pass."'";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result)>0){
        $d = 0;
        while($row = mysqli_fetch_assoc($result)){
            if($row['TrangThai'] == "khóa"){
                $d+=1;
                echo 'locked';
            }
        }
        if($d==0)
            echo 'success';
    }else{
        echo 'error';
    }
}