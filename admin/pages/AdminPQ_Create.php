<?php include '../templates/nav_admin1.php' ?>

<div class="create_admin">
    <h1 class="Title_Admin_create_form">Thêm chức năng quản lý nhân viên</h1>
    <p class="Notification_create_form">Vui lòng điền thông tin bên dưới</p>
    <form action="" method="POST">

        @Html.AntiForgeryToken()
        <div class="form_field">
            <label for="" class="name_form_field">Nhân viên: </label>
            <select class="textfile" name="MACHUCNANG" id="chucnang">
                <option value="">Chọn quyền</option>
                @foreach (var item in ViewBag.CHUCNANG)
                {
                <option value="@item.MACHUCNANG">@item.TENCN</option>
                }
            </select>
            <span class="error_message"></span>
        </div>
        <div class="form_field">
            <label for="" class="name_form_field">Sản phẩm : </label>
            <select class="textfile" name="MAADMIN" id="admin">
                <option value="">Chọn nhân viên</option>
                @foreach (var item in ViewBag.ADMIN)
                {
                <option value="@item.MAADMIN">@item.HOTEN</option>
                }
            </select>
            <span class="error_message"></span>
        </div>
        <div class="button">
            <input type="submit" value="Thêm" class="button_add_admin" />
            <a href="@Url.Action(" Index","AdminPQ")"><input type="button" value="Quay lại"
                    class="button_add_admin" /></a>
        </div>
        }
    </form>

</div>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-1',
            formGroupSelector: '.form_field',
            errorSelector: '.error_message',
            rules: [
                Validator.isRong('#chucnang', 'Vui lòng chọn chức năng!'),
                Validator.isRong('#admin', 'Vui lòng chọn nhân viên!'),
            ],
            onSubmit: function (data) {
                // Call API
                //console.log(data);
            }
        });
    });
</script> -->
<?php include '../templates/nav_admin2.php' ?>