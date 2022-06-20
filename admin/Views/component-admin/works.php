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
                    <th>HÌnh ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Mô tả</th>
                    <th>giá bán</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0" id="tbody">
                <tr>
                    <td><img src="" alt="Hình ảnh"></td>
                    <td>Sản phẩm 1</td>
                    <td>Trạng thái</td>
                    <td>mô end tả</td>
                    <td>100000000VNĐ</td>
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