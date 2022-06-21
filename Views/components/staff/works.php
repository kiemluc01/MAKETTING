<div class="container-xxl flex-grow-1 container-p-y" style="width:98%!important;">
  <div class="row">
    <div class="card">
        <div class="container-header" style="display:flex;justify-content: space-between;">
            <div class="add" style="display:flex;">
                <h3 class="card-header">Công việc</h3>
                <button class="btn btn-primary" style="height: 50px!important;margin:10px!important; "><b style="color: #FFF;">+</b> Sản phẩm</button>
            </div>
            <div class="fillter" style="display:flex;">
                <h3 class="card-header">Trạng thái</h3>
                <select name="trangthai" id="trangthai" class="btn btn-primary dropdown-toggle show" style="height: 50px!important;margin:10px!important;">
                    <option value="Đang thực hiện">Đang thực hiện</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên công việc</th>   
                    <th>ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th>Độ ưu tiên</th> 
                    <th>Phân loại</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="tbody">
            <?php 
                $CV = loadModel('Work');
                $result = $CV->getall();
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['TenCongViec']; ?></td>
                            <td><?php echo $row['NgayBatDau']; ?></td>
                            <td><?php echo $row['NgayKetThuc']; ?></td>
                            <td><?php echo $row['TrangThai']; ?></td>
                            <td><?php echo $row['DoUuTien']; ?></td>
                            <td><?php echo $row['PhanLoai']; ?></td>
                            <td>
                                <input type="submit" value="Xóa" class="btn btn-danger" id="xoa" idCV="<?php echo $row['ID_CongViec']; ?>">
                                <input type="submit" value="Sửa" class="btn btn-warning" id="sua" idCV="<?php echo $row['ID_CongViec']; ?>">
                            </td>
                        </tr>
                        <?php
                    }
                }
            ?>
            </tbody>
        </table>
        </div>
    </div>
  </div>
</div>