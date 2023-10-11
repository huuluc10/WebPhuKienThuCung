<?php include '../templates/nav_admin1.php' ?>

<h2 style="padding-top:10px">DANH SÁCH CHỨC NĂNG PHÂN QUYỀN</h2>
<table class="table_dsadmin">
    <thead>
        <tr>
            <th style="width: 65px;">Mã chức năng</th>
            <th style="width: 120px;">Tên chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach (var item in Model)
        {
        <tr>
            <td>
                @Html.DisplayFor(modelItem => item.MACHUCNANG)
            </td>
            <td>
                @Html.DisplayFor(modelItem => item.TENCN)
            </td>
        </tr>
        }
    </tbody>
</table>

<?php include '../templates/nav_admin2.php' ?>