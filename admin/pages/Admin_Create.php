<?php include '../templates/nav_admin1.php' ?>
<div class="create_admin">
    <h1 class="Title_Admin_create_form">Thêm tài khoản quản trị viên</h1>
    <p class="Notification_create_form">Vui lòng điền thông tin bên dưới</p>
    <form action="" Method="POST">
        <div class="form_field">
            <label for="" class="name_form_field">Mã Admin : </label>
            <input type="text" class="textfile" readonly value="@ViewBag.MAADMIN" name="MAADMIN">
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Họ tên Admin : </label>
            <input type="text" class="textfile" id="fullname" name="HOTEN">
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Địa chỉ : </label>
            <textarea class="textfile_address" cols="2" id="address" name="DIACHI"></textarea>
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Số điện thoại : </label>
            <input type="text" class="textfile" id="phoneNumber" name="DIENTHOAI">
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Email : </label>
            <input type="text" class="textfile" id="email" name="EMAIL">
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Loại tài khoản : </label>
            <select class="textfile" name="MALOAI">
                @foreach (var item in Model)
                {
                <option value="@item.MALOAI">@item.TENLOAI</option>
                }
            </select>

        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Tên đăng nhập : </label>
            <input type="text" class="textfile" id="userName" name="TENDN">
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Mật khẩu : </label>
            <input type="password" class="textfile" id="password" name="MATKHAU">
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Xác nhận lại mật khẩu : </label>
            <input type="password" class="textfile" id="password_confirmation">
            <span class="error_message"></span>
        </div>

        <div class="form_field">
            <label for="" class="name_form_field">Ảnh đại diện : </label>
            <div class="custom-file">
                <div class="form_field">
                    <input type="file" class="custom-file-input" id="img_profile_admin" name="fileUpload">
                    <span class="error_message"></span>
                </div>
                <div class="custom-file-img">
                    <img src="" alt="" id="custom-file-img-display">
                </div>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Thêm" class="button_add_admin" />
            <a href=""><input type="button" value="Quay lại" class="button_add_admin" /></a>
        </div>
    </form>
</div>

<!-- <script>
    var dsUserName = @Html.Raw(Json.Encode(ViewBag.dsUserName));

    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-1',
            formGroupSelector: '.form_field',
            errorSelector: '.error_message',
            rules: [
                Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ!'),
                Validator.isRequired('#address', 'Vui lòng nhập địa chỉ!'),
                Validator.isRequired('#phoneNumber', 'Vui lòng nhập số điện thoại!'),
                Validator.isRequired('#email', 'Vui lòng nhập Email!'),
                Validator.isRequired('#userName', 'Vui lòng nhập tài khoản!'),
                Validator.isRequired('#password', 'Vui lòng nhập mật khẩu!'),
                Validator.isRequired('#password_confirmation', 'Vui lòng nhập lại mật khẩu xác nhận!'),
                Validator.isRequired('#img_profile_admin', 'Vui lòng chọn hình ảnh đại diện!'),
                Validator.isEmail('#email'),
                Validator.minLength('#password', @ViewBag.minPassword),
                Validator.maxLength('#password', @ViewBag.maxPassword),
                Validator.isRequired('#password_confirmation'),
                Validator.isConfirmed('#password_confirmation', function () {
                    return document.querySelector('#form-1 #password').value;
                }, 'Mật khẩu nhập lại không chính xác'),
                Validator.isExistUserLogin('#userName', dsUserName),
                
            ],
            onSubmit: function (data) {
                // Call API
                //console.log(data);
            }
        });
    });
    const img_avatar_register_admin = document.querySelector("#img_profile_admin");
    const custom_file_img_display = document.querySelector("#custom-file-img-display");
    img_avatar_register_admin.onchange = function (e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = (e) => {
            custom_file_img_display.src = e.target.result;
        };
        reader.readAsDataURL(file);
    };
</script> -->
<?php include '../templates/nav_admin2.php' ?>