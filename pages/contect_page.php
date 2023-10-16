<!--contact-->
<?php include '../templates/header.php' ?>
<div class="liehHe">
    <div class="liehHe_left">
        <h5>Thông tin liên hệ</h5>
        <ul>
            <li>
                Quản lý: nhóm 11
            </li>
            <li>
                Địa chỉ: 2 Đ. Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang, Khánh Hòa 650000
            </li>
            <li>
                Email: Nam552000@gmail.com
            </li>
        </ul>
        <h5>Liên hệ Shop</h5>
        <form action="" class="create_admin_form">
            <div class="form_field">
                <label for="" class="name_form_field">Họ tên: </label>
                <input type="text" class="textfile" id="fullname" name="Name" style="width: 400px;">
                <span class="error_message"></span>
            </div>

            <div class="form_field">
                <label for="" class="name_form_field">Email : </label>
                <input type="text" class="textfile" id="phoneNumber" name="Email" style="width: 400px;">
                <span class="error_message"></span>
            </div>
            <div class="form_field">
                <label for="" class="name_form_field">Tiêu đề : </label>
                <input type="text" class="textfile" id="email" name="Subject" style="width: 400px;">
                <span class="error_message"></span>
            </div>
            <div class="form_field">
                <label for="" class="name_form_field">Nội dung : </label>
                <textarea class="textfile_address" cols="2" id="address"
                    style="width: 400px;height: 100px;  border-radius: 10px;" name="Message"></textarea>
                <span class="error_message"></span>
            </div>
            <div class="button">
                <input type="submit" value="Liên hệ" class="button_add_admin" style="width: 400px; " />
            </div>
        </form>
    </div>
    <div class="liehHe_right">
        <h5>Bản đồ</h5>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.57113737711!2d109.1990652!3d12.2686687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067ed3a052f11%3A0xd464ee0a6e53e8b7!2sTr%C6%B0%E1%BB%9Dng%20%C4%90%E1%BA%A1i%20h%E1%BB%8Dc%20Nha%20Trang!5e0!3m2!1sen!2sus!4v1656350168167!5m2!1sen!2sus"
            width="600" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<?php include '../templates/footer.php' ?>