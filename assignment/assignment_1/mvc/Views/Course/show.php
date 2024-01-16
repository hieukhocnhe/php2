<div class="container">
    <h1 class="text-center m-5">Danh sách khóa học</h1>
    <a class="btn btn-primary my-3" href="index.php?url=create">Thêm khóa học</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên khóa học</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Danh mục</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $key => $value):
                    extract($value) ?>
                    <tr class="">
                        <td class="align-middle">
                            <?= $id ?>
                        </td>
                        <td class="align-middle">
                            <?= $name_course ?>
                        </td>
                        <td class="align-middle">
                            <img class="border rounded" src="./Public/images/<?= $image ?>" alt="" width="70px"
                                height="70px">
                        </td>
                        <td class="align-middle">
                            <?php echo number_format($price, 0, ',', '.') . ' đ' ?>
                        </td>
                        <td class="align-middle">
                            <?= $name_category ?>
                        </td>
                        <td class="align-middle">
                            <a href="index.php?url=edit&id=<?= $id; ?>" class="btn btn-warning">Sửa</a>
                            <a href="index.php?url=destroy&id=<?= $id; ?>" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>