<?php
include 'config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $maNhanVien = $_POST["maNhanVien"];
        $ho = $_POST["ho"];
        $ten = $_POST["ten"];
        $dienThoai = $_POST["dienThoai"];
        $diaChiCuThe = $_POST["diaChiCuThe"];
        $email = $_POST["email"];
        $ngaySinh = $_POST["ngaySinh"];
        $maXa = $_POST["maXa"];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            //lấy file hình
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            if ($file_size > 2097152) {
                $errors[] = 'File size should be 2MB';
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, $_SESSION['rootPath'] . "/../assets/img/sanpham/" . $file_name);
            } else {
                print_r($errors);
            }

            $statement = $dbh->prepare("UPDATE nhan_vien SET ho = '" . $ho . "', ten = '" . $ten . "', ngaySinh = '" . $ngaySinh . "', diaChiCuThe = '" . $diaChiCuThe . "', dienThoai = '" . $dienThoai . "',email = '" . $email . "', maXa = '" . $maXa . "', avatar = '" . $file_name . "', email = '" . $email . "' WHERE maNhanVien = '" . $maNhanVien . "'");
            $statement->execute();

        } else {
            $statement = $dbh->prepare("UPDATE nhan_vien SET ho = '" . $ho . "', ten = '" . $ten . "', ngaySinh = '" . $ngaySinh . "', diaChiCuThe = '" . $diaChiCuThe . "', dienThoai = '" . $dienThoai . "',email = '" . $email . "', maXa = '" . $maXa . "'  WHERE maNhanVien = '" . $maNhanVien . "'");
            $statement->execute();
        }
        echo '<script>
            alert("Cập nhật thông tin thành công");
            window.location.href = "../pages/Admin_DsAdmin.php?";
        </script>';
    } catch (Exception $e) {
        echo 'Có lỗi trong quá trình cập nhật thông tin' . $e->getMessage();
    }
}
?>