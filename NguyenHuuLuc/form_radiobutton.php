<?php
include '../templates/header.php';
?>

<html>

<head>

    <title>Input/Ouput data</title>
</head>

<body>

    <form action="" name="myform" method="post">
        <input type="radio" name="radGT" value="Nam" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nam')
            echo 'checked="checked"'; ?> checked /> Nam<br>
        <input type="radio" name="radGT" value="Nu" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nu')
            echo 'checked="checked"'; ?> />
        N&#7919;<br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['radGT'])) {
        echo "Gioi tinh : " . $_POST['radGT'];
    }
    ?>

    <button type="button" onclick="window.history.go(-1);">Quay lại</button>
</body>

</html>

<?php include '../templates/footer.php' ?>