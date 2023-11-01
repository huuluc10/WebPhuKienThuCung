<?php
include '../templates/nav_admin1.php';
//lấy dữ liệu thương hiệu
include '../includes/get_brand_data_from_id.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "nhấn";
    // $brand_name = $_POST["TENTH"];
    // echo isset($_FILES["image"]) != null;
    // if (isset($_FILES["image"]) != null) {
    //     $file_name = $_FILES['image']['name'];
    //     $file_size = $_FILES['image']['size'];
    //     $file_tmp = $_FILES['image']['tmp_name'];
    //     $file_type = $_FILES['image']['type'];
    //     $file_ext = @strtolower(end(explode('.', $_FILES['image']['name'])));
    //     move_uploaded_file($file_tmp, $_SESSION['rootPath'] . "/../assets/img/thuong_hieu/" . $file_name);

    //     $statement = $dbh->prepare("UPDATE `thuong_hieu` SET `tenThuongHieu`='" . $brand_name . "',`logo`='" . $file_name . "' WHERE `maThuongHieu` = '" . $brand_id . "'");

    // } else {
    //     $statement = $dbh->prepare("UPDATE `thuong_hieu` SET `tenThuongHieu`='" . $brand_name . "' WHERE `maThuongHieu` = '" . $brand_id . "'");
    // }
    // $statement->execute();
    // echo '<script>window.location.href = "brand_index.php?";</script>';
} else {
    echo "test";
}
?>
<style>
    input,
    select,
    textarea {
        font-size: 16px;
    }

    label {
        font-size: 20px;
    }
</style>
<div class="body" style="margin-top: 15px">
    <div class="create_admin">
        <h1 class="Title_Admin_create_form">Chỉnh sửa thương hiệu</h1>
        <p class="Notification_create_form">Vui lòng điền thông tin bên dưới</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $brand_id; ?>" method="post"
            enctype="multipart/form-data" id="form-2">
            <div class="form_field">
                <label class="name_form_field">Mã thương hiệu : </label>
                <input type="text" name="maTH" class="textfile" value="<?php echo $result->maThuongHieu; ?>" readonly>
            </div>
            <div class="form_field">
                <label class="name_form_field">Tên thương hiệu : </label>
                <input type="text" class="textfile" id="tenTH" name="TENTH"
                    value="<?php echo $result->tenThuongHieu; ?>">
                <span class="error_message">
                    <!-- <?php if (!empty($error))
                        echo $error; ?> -->
                </span>
            </div>

            <div class="form_field">
                <label class="name_form_field">Logo : </label>
                <div class="custom-file">
                    <div class="form_field">
                        <input type="file" class="custom-file-input" id="img_thuonghieu" name="image" accept="image/*">
                        <span class="error_message"></span>
                    </div>
                    <div class="custom-file-img" style="width: 237px; height: 77px;">
                        <img src="<?php echo $_SESSION['rootPath'] . "/../assets/img/thuong_hieu/" . $result->logo; ?>"
                            alt="Logo thương hiệu" id="custom-file-img-display" style="width: 231px; height: 74px;">
                    </div>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Lưu" class="button_add_admin" name="save" />
                <a href="javascript:history.go(-1);"><input type="button" value="Quay lại"
                        class="button_add_admin" /></a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-2',
            formGroupSelector: '.form_field',
            errorSelector: '.error_message',
            rules: [
                Validator.isRequired('#tenTH', 'Vui lòng nhập tên thương hiệu!'),
            ],
            onSubmit: function (data) {
                console.log(data);
                // $.ajax({
                //     method: "POST",
                //     url: "../includes/edit_brand.php",
                //     data: { brand_id: data.maTH, brand_name: data.tenTH, save: data.save, },
                // }).done(function (response) {
                //     alert("test");
                // });
            }
        });
    });

    const img_thuonghieu = document.querySelector("#img_thuonghieu");
    const custom_file_img_display = document.querySelector("#custom-file-img-display");
    img_thuonghieu.onchange = function (e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = (e) => {
            custom_file_img_display.src = e.target.result;
        };
        reader.readAsDataURL(file);
    };
</script>
<?php include '../templates/nav_admin2.php' ?>