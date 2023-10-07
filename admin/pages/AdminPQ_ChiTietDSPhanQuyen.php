<?php include '../templates/nav_admin1.php' ?>

<div class="table_header">
    <div class="search">
        <div class="search_title" style="margin-bottom: 20px">
            Họ tên: @ViewBag.hoTenAdmin
        </div>
        <div class="search_title">
            Loại tài khoản: @ViewBag.ltk
        </div>
    </div>
</div>
<table class="table_dsadmin">
    <thead>
        <tr>
            <th style="width: 65px;">Mã quyền</th>
            <th style="width: 120px;">Tên chức năng</th>
            <th style="width: 50px;">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach (var item in Model)
        {
        <tr>
            <td>
                @Html.DisplayFor(modelItem => item.MAPQ)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.CHUCNANG_QUYEN.TENCN)
            </td>
            <td>
                <a href="@Url.Action(" Delete","AdminPQ", new { id=item.MAPQ })"><i
                        class="fa-solid fa-xmark remove"></i></a>
            </td>
        </tr>
        }


    </tbody>
</table>
@*<div align="center">@Html.PagedListPager(Model, page => Url.Action("DSAdmin", new { page = page }))</div>*@


<?php include '../templates/nav_admin2.php' ?>