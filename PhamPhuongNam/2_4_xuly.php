<?php
include '../templates/header.php';
?>

<body>
    <b>Đăng nhập thành công. Những thông tin bạn đã nhập</b>
    <br>
    Họ tên: <?php echo $_POST['hoTen']; ?><br>
    Giới tính: <?php echo ($_POST['gioiTinh'] == "nu") ? "Nữ" : "Nam"; ?><br>
    Địa chỉ: <?php echo $_POST['diaChi']; ?><br>
    Điện thoại: <?php echo $_POST['sdt']; ?><br>
    Quốc tịch: <?php
                switch ($_POST['quocTich']) {
                    case 'VN':
                        echo "Việt Nam";
                        break;
                    case 'US':
                        echo "Anh";
                        break;
                    case 'CN':
                        echo "Trung Quốc";
                        break;
                }
                ?><br>
    Môn học: <?php
                if (isset($_POST['chk1']))
                    echo $_POST['chk1'] . " ";
                if (isset($_POST['chk2']))
                    echo $_POST['chk2'] . " ";
                if (isset($_POST['chk3']))
                    echo $_POST['chk3'] . " ";
                if (isset($_POST['chk4']))
                    echo $_POST['chk4'];
                ?><br>
    Ghi chú: <?php echo $_POST['comment']; ?><br>
</body>

<?php include '../templates/footer.php' ?>