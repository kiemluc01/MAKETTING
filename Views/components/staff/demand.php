<div class="container-xxl flex-grow-1 container-p-y" style="width:98%!important; ">
  <div class="row">
    <div class="card">
        <div class="container-header" style="display:flex;justify-content: space-between;">
            <div class="add" style="display:flex;">
                <h3 class="card-header">Nhu cầu</h3>
                <button class="btn btn-primary" style="height: 50px!important;margin:10px!important; "><b style="color: #FFF;">+</b> Nhu cầu</button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên nhu cầu</th>   
                    <th>ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="tbody">
            <?php 
                        $DM = loadModel('Demand');
                        $result = $DM->getall();
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $row['TenNhuCau']; ?></td>
                                    <td><?php echo $row['NgayBatDau']; ?></td>
                                    <td><?php echo $row['NgayKetThuc']; ?></td>
                                    <td><?php echo $row['TrangThai']; ?></td>
                                    <td>
                                        <input type="submit" value="Xóa" class="btn btn-danger" id="xoa" idNC="<?php echo $row['ID_NhuCau']; ?>">
                                        <input type="submit" value="Sửa" class="btn btn-warning" id="sua" idNC="<?php echo $row['ID_NhuCau']; ?>">
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