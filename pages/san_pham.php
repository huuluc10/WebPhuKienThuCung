<?php include '../templates/header.php' ?>
<div class="body" style="margin-top: 50px">
    <h4>Tất cả sản phẩm</h4>
    <div class="product_search">
        <div class="icon_search">
            <i class="fa-solid fa-filter"></i>
        </div>
        <div class="product_search_item search_search">
            <h3>THƯƠNG HIỆU </h3>
            <div>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="product_search_item_list">
                <ul>
                    Danh sách thương hiệu
                </ul>
            </div>
        </div>
        <div class="product_search_item search_search">
            <h3>GIÁ</h3>
            <div>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <form action="" method="post" enctype="multipart/form-data"
                class="product_search_item_list search_search_search" style="height: 150px;">
                <div class="input_saerch">
                    <input type="text" class="textfile" style="width: 100px;" name="min">
                    <h5 style="margin:0"> đến </h5>
                    <input type="text" class="textfile" style="width: 100px;" name="max">
                </div>
                <input type="submit" value="Áp Dụng" class="button_add_admin"
                    style="width: 100px; margin: 10px 0 0 90px;" />
            </form>
        </div>
        <div class="product_search_item search_search">
            <h3>LOẠI SẢN PHẨM </h3>
            <div>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="product_search_item_list">
                <ul>
                    Danh sách loại
                </ul>
            </div>
        </div>
    </div>
    <div class="divider">

    </div>
    <div class="product_list">
        <div class="grid">
            <div class="row">
                <?php for ($i = 0; $i < 5; $i++)
                    echo
                        "<div class='product_item'>
                    <img src='https://webkit.org/demos/srcset/image-src.png' alt=''>
                    <div class='product_thuonghieu'>
                        <h5>@item.TENTH</h5>
                    </div>
                    <div class='product_name'>
                        <h5>@item.TENSP</h5>
                    </div>
                    <div class='product_price'>
                        <h5> @String.Format('{0:0,0}', item.DONGIABAN) VNĐ</h5>
                    </div>
                    @if (item.SOLUONG != 0)
                    {
                    <button id='1' class='button_product' onclick='window.location.href='@Url.Action('
                        ThemGiohang', 'GioHang' , new { @iMASP=item.MASP, @iGIAMGIA=item.GIAMGIA,
                        @strURL=Request.Url.ToString() })''>Thêm vào giỏ hàng</button>
                    }
                    else
                    {
                    <button class='button_product'>Hàng tạm thời hết</button>
                    }
                    <a class='xem_icon'' href=''>
                        <i class='fa-regular fa-eye'></i>
                    </a>
                </div>"
                        ?>

                </div>
            </div>


        </div>
    </div>
<?php include '../templates/footer.php' ?>