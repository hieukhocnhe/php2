<div class="container">
    <h1 class="text-center my-5">Thêm khóa học</h1>
    <a href="javascript:void(0)" class="btn btn-secondary" onclick="goBack()">Quay lại</a>
    <form action="" method="post" class="mt-3" enctype="multipart/form-data">
        <input name="name_course" type="text" class="form-control my-2" placeholder="Tên khóa học">
        <span class="text-danger pb-2">
            <?php
            if (isset($_SESSION['error']['name_course'])) {
                echo $_SESSION['error']['name_course'];
                unset($_SESSION['error']['name_course']);
            }
            ?>
        </span>
        <input name="image" type="file" class="form-control my-2">
        <input name="price" type="text" class="form-control my-2" placeholder="Giá khóa học">
        <span class="text-danger pb-2">
            <?php
            if (isset($_SESSION['error']['price'])) {
                echo $_SESSION['error']['price'];
                unset($_SESSION['error']['price']);
            }
            ?>
        </span>
        <!-- Category \ -->
        <select name="id_category" class="form-control my-2">
            <option value="">Chọn danh mục</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id']; ?>">
                    <?= $category['name_category']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <span class="text-danger pb-2">
            <?php
            if (isset($_SESSION['error']['id_category'])) {
                echo $_SESSION['error']['id_category'];
                unset($_SESSION['error']['id_category']);
            }
            ?>
        </span><br>
        <button name="create" class="btn btn-outline-primary" type="submit">Thêm</button>
    </form>
</div>