<div class="container-xxl flex-grow-1 container-p-y" style="width:98%!important;">
  <div class="row">
    <div class="card">
        <div class="container-header" style="display:flex;justify-content: space-between;">
            <div class="add" style="display:flex;">
                <h3 class="card-header">Sản phẩm</h3>
                <button class="btn btn-primary" style="height: 50px!important;margin:10px!important; "><b style="color: #FFF;">+</b> Sản phẩm</button>
            </div>
        </div>
    </div>
    <form action="" method="get" onsubmit="return false">
        <div class="card">
            <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>HÌnh ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá bán</th>
                        <th>Giá sale</th>
                        <th>Nhu cầu</th>
                        <th>Mô tả</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0" id="tbody">
                    <?php 
                        $product = loadModel('getProduct');
                        $result = $product->getall();
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
                    ?>
                    
                </tbody>
            </table>
            </div>
        </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        $('#xoa').click(function(){
            var id = $(this).attr("idSP")
            alert(id)
            $.ajax({
                url: "Models/Product.php",
                type: "post",
                data:{
                    idsp: id
                },
                success: function(data){
                    document.getElementById('tbody').innerHTML = ""
                    $('#tbody').append(data)
                    location.reload();
                }
            })
        })
    })
</script>