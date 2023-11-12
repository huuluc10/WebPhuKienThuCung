<?php include("../templates/header.php") ?>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
        table {
            background-color: wheat;
            width: 500px;
        }

        th {
            background-color: white;
            font-style: vni-times;
            color: blue;
        }

        td {
            padding-left: 5px;
        }
    </style>
</head>

<?php
function thayThe($socanthay, $sothay, &$mang)
{
    for ($i = 0; $i < sizeof($mang); $i++)
        if ($socanthay == $mang[$i])
            $mang[$i] = $sothay;
}
if (isset($_POST['mang']))
    $mang = trim($_POST['mang']);
else
    $mang = "0";
if (isset($_POST['socanthay']) && isset($_POST['sothay']) && isset($_POST['strmang'])) {
    $socanthay = trim($_POST['socanthay']);
    $sothay = trim($_POST['sothay']);
    $strmang = trim($_POST['strmang']);
    $mang = explode(",", $strmang);
    $mangcu = implode(", ", $mang);
    thayThe($socanthay, $sothay, $mang);
    $mangmoi = implode(", ", $mang);
} else {
    $socanthay = "";
    $sothay = "";
    $strmang = "";
}
?>
<form action="" method="post">
    <table>
        <th colspan="3">
            <h3 style="margin-top: 5px;margin-bottom: 5px;">THAY THẾ</h3>
        </th>
        <tr>
            <td>Nhập mảng:</td>
            <td>
                <input type="text" name="strmang" style="width: 90%;" value="<?php if (isset($_POST['strmang']))
                    echo $strmang; ?>"> <span style="color:red;">(*)</span>
        </tr>
        <tr>
            <td>Giá trị cần thay thế:</td>
            <td>
                <input type="text" name="socanthay" style="width: 30%;" value="<?php if (isset($_POST['socanthay']))
                    echo $socanthay; ?>">
        </tr>
        <tr>
            <td>Giá trị thay thế:</td>
            <td>
                <input type="text" name="sothay" style="width: 30%;" value="<?php if (isset($_POST['sothay']))
                    echo $sothay; ?>">
        </tr>
        <tr>
            <td> </td>
            <td>
                <input type="submit" value="Thay thế" style="width: 30%;">
            </td>
        </tr>
        <tr>
            <td>Mảng cũ:</td>
            <td><input type="text" style="width: 100%;"  value="<?php if (isset($mangcu))
                echo $mangcu; ?>" readonly></td>
        </tr>
        <tr>
            <td>Mảng sau khi thay thế:</td>
            <td><input type="text"  style="width: 100%;" value="<?php if (isset($mangmoi))
                echo $mangmoi; ?>" readonly ></td>
        </tr>
        <tr>
            <td colspan='2' style="text-align: center; background-color: yellow;">
                <span style="color:red;">(*)</span> Các số được nhập cách nhau bởi dấu ","
            </td>
        </tr>
    </table>
</form>
<?php include("back.php") ?>
<?php include("../templates/footer.php") ?>