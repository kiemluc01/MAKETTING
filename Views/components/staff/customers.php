<div class="container-xxl flex-grow-1 container-p-y" style="width:98%!important;">
  <div class="row">
    <div class="card">
        <div class="container-header" style="display:flex;justify-content: space-between;">
            <div class="add" style="display:flex;">
                <h3 class="card-header">Khách hàng</h3>
                <button class="btn btn-primary" style="height: 50px!important;margin:10px!important; "><b style="color: #FFF;">+</b> Khách hàng</button>
            </div>
            <div class="fillter" style="display:flex;">
                <h3 class="card-header">Lĩnh vực</h3>
                <select name="trangthai" id="trangthai" class="btn btn-outline-primary dropdown-toggle show" style="height: 50px!important;margin:10px!important;">
                    <option value="Đang thực hiện">Tất cả</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên KH</th>
                    <th>Gới tính</th>    
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Tên công ty</th>
                    <th>Số lượng NV</th>
                    <th>Doanh Thu</th>
                    <th>Website</th>
                    <th>Lĩnh vực</th>
                    <th>Nguồn</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="tbody">
            <?php 
                $cus = loadModel('Customer');
                $result = $cus->getall();
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['HoTen']; ?></td>
                            <td><?php echo $row['GioiTinh']; ?></td>
                            <td><?php echo $row['DiaChi']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['SDT']; ?></td>
                            <td><?php echo $row['TenCongTy']; ?></td>
                            <td><?php echo $row['SoLuongNV']; ?></td>
                            <td><?php echo $row['DoanhThuHangNam']; ?></td>
                            <td><?php echo $row['Website']; ?></td>
                            <td><?php echo $row['TenLinhVuc']; ?></td>
                            <td><?php echo $row['TenNguon']; ?></td>
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