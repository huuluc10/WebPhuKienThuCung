<?php include '../templates/nav_admin1.php' ?>
<div class="table_header">
    <div class="search">
        <a href="@Url.Action(" DSChucNang","AdminPQ")">
            <i class="fa-solid fa-magnifying-glass"></i>
            <div class="search_title">
                Danh sách chức năng phân quyền
            </div>
        </a>
    </div>
    <div class="add_admin">
        <a href="@Url.Action(" Create","AdminPQ")">
            <i class="fa-solid fa-user-plus"></i>
            <div class="add_title">
                Thêm phân quyền
            </div>
        </a>
    </div>
</div>
<table class="table_dsadmin">
    <thead>
        <tr>
            <th style="width: 65px;">Loại tài khoản</th>
            <th style="width: 120px;">Họ tên</th>
            <th style="width: 50px;">Chi tiết</th>
        </tr>
    </thead>
    <tbody>
        @foreach (var item in Model)
        {
        <tr>
            <td>
                @Html.DisplayFor(modelItem => item.LOAITKADMIN.TENLOAI)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.HOTEN)
            </td>
            <td>
                <a href="@Url.Action(" ChiTietDSPhanQuyen","AdminPQ", new { id=item.MAADMIN })"><i
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