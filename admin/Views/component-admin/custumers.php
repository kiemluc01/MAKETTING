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
                    <th>Tên KH</th>
                    <th>Email</th>    
                    <th>SĐT</th>
                    <th>Lĩnh vực</th>
                    <th>Tên công ty</th>
                    <th>Địa chỉ</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="tbody">
                <tr>
                    <td>Nguyễn Kiêm Lực</td>
                    <td>kiemluc01@gmail.com</td>
                    <td>0337825329</td>
                    <td>Kinh Doanh</td>
                    <td>UTE</td>
                    <td>Quảng trị</td>
                    <td>
                        <input type="submit" value="Xóa" class="btn btn-danger">
                        <input type="submit" value="Sửa" class="btn btn-warning">
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
  </div>
</div>