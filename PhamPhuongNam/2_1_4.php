<?php
include '../templates/header.php';
?>


    <style type="text/css">
        body {

            background-color: #d24dff;

        }

        table {

            background: #ffd94d;

            border: 0 solid yellow;

        }

        thead {

            background: #fff14d;

        }

        td {

            color: blue;

        }

        h3 {

            font-family: verdana;

            text-align: center;

            /* text-anchor: middle; */

            color: #ff8100;

            font-size: medium;

        }
    </style>




<body>

    <?php
    $sum = 0;
    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
    } else {
        $name = "";
    }
    function Sum(&$sum, $string){
        if($string == "") {
            $sum =0;
        } else {
            $arr = [];
            $arr = explode(",",$string);
            foreach ($arr as $number) {
                $sum += (int)$number;
            }
        }
    }

    Sum($sum,$name);
    ?>

    <form align='center' action="2_1_4.php" method="post">

        <table>
            <thead>

                <th colspan="3" align="center">
                    <h3>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h3>
                </th>
            </thead>
            <tr>
                <td>Nhập dãy số:</td>

                <td><input colspan="2" type="text" name="name" value="<?php echo $name; ?>" /></td>
                <td>(*)</td>


            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" value="Tính tổng dãy số" name="tinh" /></td>
            </tr>
            
            <tr>
                <td>Tổng dãy số dãy số:</td>

                <td><input colspan="2" type="text" value="<?php echo $sum;  ?>" disabled /></td>

            </tr>
            <tr>
                <td colspan="3" align="center">Các dãy số cách nhau bằng dấu ,</td>
            </tr>


        </table>



    </form>




</body>



<?php include '../templates/footer.php' ?>