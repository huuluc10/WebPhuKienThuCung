<?php include '../templates/nav_admin1.php' ?>


<h2>Đơn Đặt Hàng</h2>
<table class="table_dsadmin">
    <thead>
        <tr>
            <th>Phương Thức Thanh Toán </th>
            <th>Tình Trạng Giao Hàng</th>
            <th>Ngày Đặt</th>
            <th>Ngày Giao</th>
            <th>Mã Khách Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Tổng tiền</th>
            <th>Chi tiết đơn hàng</th>
        </tr>
    </thead>
    <tbody>
        @foreach (var item in Model)
        {
        <tr style="height: 50px">
            <td>
                @if (item.DATHANHTOAN == true)
                {
                <label>Đã thanh toán</label>
                }
                else
                {
                <label>Chưa thanh toán</label>
                }
            </td>
            <td>
                @if (item.TINHTRANGDH == true)
                {
                <label>Đã xác nhận giao hàng</label>
                }
                else
                {
                <a href="@Url.Action(" XacNhanDonDatHang","DonHang", new { id=item.MADH })"><input type="button"
                        value="Xác nhận" class="button_add_admin" /></a>
                }

            </td>
            <td>
                @Html.DisplayFor(modelItem => item.NGAYDAT)
            </td>
            <td>
                @if (item.TINHTRANGDH == true)
                {
                @Html.DisplayFor(modelItem => item.NGAYGIAO)
                }
                else
                {
                <label>Đang giao</label>
                }
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.MAKH)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.KHANHHANG.HOTENKH)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.TONGTIEN)
            </td>
            <td>
                <a href="@Url.Action(" ChiTietDonHang","DonHang", new { id=item.MADH })"><i
                        class="fa-solid fa-circle-info detail"></i></a>
            </td>
        </tr>
        }


    </tbody>
</table>
@*<div align="center">@Html.PagedListPager(Model, page => Url.Action("DSAdmin", new { page = page }))</div>*@

<ul class="page">
    @if (Model.PageCount > 1)
    {
    for (int i = 1; i <= Model.PageCount; i++) { <li>
        <a href="@Url.Action(" Index", new { page=i })" class="@((i == Model.PageNumber) ? " page_button
            page_button_active" : "page_button" )">@i</a>
        </li>
        }
        }
</ul>


<?php include '../templates/nav_admin2.php' ?>