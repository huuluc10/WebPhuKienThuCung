<?php include("../templates/header.php") ?>
<style>
  a {
    text-decoration: none;
  }
</style>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'qlbansua');
mysqli_set_charset($conn, 'UTF8');
// $sql = "select Ma_sua,ten_sua,Trong_luong,Don_gia from sua";
// $result = mysqli_query($conn, $sql);
$rowsPerPage = 5; //số mẩu tin trên mỗi trang 
if (!isset($_GET['page'])) {
  $_GET['page'] = 1;
}
//vị trí của mẩu tin đầu tiên trên mỗi trang
$offset = ($_GET['page'] - 1) * $rowsPerPage;
//lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
$result = mysqli_query($conn, "SELECT  Ma_sua, ten_sua, Trong_luong, Don_gia FROM sua LIMIT $offset,$rowsPerPage");
echo "<p align='center'><font size='5'> THÔNG TIN SỮA</font></P>";
echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
echo '<tr>
  <th width="20">STT</th>
  <th width="60">Mã sữa</th>
  <th width="200">Tên sữa</th>
  <th width="60">Trọng lượng</th>
  <th width="60">Giá</th>
  </tr>';
if (mysqli_num_rows($result) <> 0) {
  $stt = 1;
  while ($rows = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td>$stt</td>";
    echo "<td>$rows[0]</td>";
    echo "<td>$rows[1]</td>";
    echo "<td>$rows[2]</td>";
    echo "<td>$rows[3]</td>";
    echo "</tr>";
    $stt += 1;
  } //while
}
echo "</table>";
$re = mysqli_query($conn, 'select * from sua');
//tổng số mẩu tin cần hiển thị
$numRows = mysqli_num_rows($re);
//tổng số trang
$maxPage = floor($numRows / $rowsPerPage) + 1;
echo '<div style="text-align: center; margin-top:15px; color: black;">';
echo "<a  style='color: black; text-decoration: none;' href=" . $_SERVER['PHP_SELF'] . "?page=1><<&nbsp;&nbsp;&nbsp;</a> ";
if ($_GET['page'] > 1)
  echo "<a  style='color: black; text-decoration: none;' href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . "><&nbsp;&nbsp;</a> ";
for ($i = 1; $i <= $maxPage; $i++) {
  if ($i == $_GET['page'])
    echo '<b> ' . $i . '</b> '; //trang hiện tại sẽ được bôi đậm
  else
    echo "<a  style='color: black; text-decoration: none;' href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . "> " . $i . "</a> ";
}
if ($_GET['page'] < $maxPage)
  echo "<a style='color: black; text-decoration: none;'  href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">&nbsp;&nbsp;></a>";
echo "<a style='color: black; text-decoration: none;'  href=" . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">&nbsp;&nbsp;&nbsp;>></a> ";
// echo "<br>  Tong so trang la: $maxPage ";
echo '</div>';
?>
<br>
<a href="" ></a>
<?php include("back.php") ?>
<?php include("../templates/footer.php") ?>