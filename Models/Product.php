<?php
$connect = mysqli_connect("localhost", "root", "", "dapm1");
mysqli_query($connect, "SET NAMES 'utf8'");
if(isset($_REQUEST['idsp'])){
    $id = $_REQUEST['idsp'];
    $sql = "select * from tbldonhang where ID_SP = '".$id."'";
    $huhu = mysqli_query($connect,$sql);
    $iddh ='';
    if(mysqli_num_rows($huhu)>0){
        $d = 0;
        while($row = mysqli_fetch_assoc($huhu)){
            $iddh = $row['ID_DONHANG'];
        }
    }
    $sql = "delete from tblcongviecdh where ID_DONHANG = '".$iddh."'";
    $sql = "delete from tbldonhang where ID_SP = '".$id."'";
    $sql = "delete from tblsanpham where ID_SP = '".$id."'";
    if(mysqli_query($connect,$sql)){
        $result = mysqli_query($connect,"select * from tblsanpham,tblhinhanh,tblnhucau where tblsanpham.ID_hinhanh = tblhinhanh.ID_hinhanh and tblsanpham.ID_nhucau =tblnhucau.ID_nhucau order by -tblsanpham.ID_SP");
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><img src="<?php echo $row['HinhAnh']; ?>" alt="Hình ảnh"></td>
                    <td><?php echo $row['TenSP']; ?></td>
                    <td><?php echo $row['GiaBan']; ?></td>
                    <td><?php echo $row['GiaSale']; ?></td>
                    <td><?php echo $row['TenNhuCau']; ?></td>
                    <td><?php echo $row['Mota']; ?></td>
                    <td>
                        <input type="submit" value="Xóa" class="btn btn-danger" id="xoa" idSP="<?php echo $row['ID_SP']; ?>">
                        <input type="submit" value="Sửa" class="btn btn-warning" id="sua" idSP="<?php echo $row['ID_SP']; ?>">
                    </td>
                </tr>
                <?php
            }
        }
    }
}