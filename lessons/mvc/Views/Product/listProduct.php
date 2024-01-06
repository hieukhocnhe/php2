

<div class="container">
    <h1 class="text-center m-5">Danh sách sản phẩm</h1>
    <a class="btn btn-primary my-3" href="?url=addProduct">Thêm sản phẩm</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listProduct as $key => $value):
                    extract($value) ?>
                    <tr class="">
                        <td>
                            <?= $id ?>
                        </td>
                        <td>
                            <?= $name ?>
                        </td>
                        <td>
                            <?= $price ?>
                        </td>
                        <td>
                            <?= $description ?>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="?url=editProduct">Sửa</a>
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


