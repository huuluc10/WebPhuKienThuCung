<?php include '../templates/nav_admin1.php' ?>

<h2>Tên khách hàng: @ViewBag.ten </h2>
<h2>Mã đơn hàng: @ViewBag.tenDongHang</h2>
<h2>Chi tiết đơn đạt hàng:</h2>
<table class="table_dsadmin">
    <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach (var item in Model)
        {
        <tr style="height: 50px">
            <td>
                @Html.DisplayFor(modelItem => item.MASP)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.SANPHAM.TENSP)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.SOLUONG)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.DONGIA)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.THANHTIEN)
            </td>
        </tr>
        }


    </tbody>
</table>

<?php include '../templates/nav_admin2.php' ?>