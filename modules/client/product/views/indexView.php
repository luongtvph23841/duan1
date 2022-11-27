<?php get_header('', 'Sản phẩm') ?>

<div id="wrapper">
    <?php if (is_auth()) : ?>
        <div id="header">
            <ul id="main-menu" class="float-right mt-[-180px]">
                <li>
                    <a><strong><?php echo get_auth()['name_user'] ?></strong></a>
                    <?php if (is_admin()) : ?>
                <li>
                    <a href="?role=admin">Trang quản trị</a>
                </li>
            <?php endif; ?>
            </li>
            <a href="?role=client&mod=home&action=logout">Logout</a>
            </ul>
        </div>
    <?php else : ?>
        <div id="header">
            <ul id="main-menu" class="float-right mt-[-180px]">
                <li><a href="?role=client&mod=login">Đăng Nhập </a></li>
                <li><a href="?role=client&mod=register">Đăng Kí </a></li>
            </ul>
        </div>
    <?php endif; ?>
</div>
<div class="w-full my-3">
    <div class="grid grid-cols-4 gap-10 w-[80%] mx-auto">
        <?php foreach ($products as $product) : ?>
            <div class="mb-[25px] border-[#ebebeb] border-[1px]">
                <div class="mb-[20px]">
                    <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>" class="flex justify-center">
                        <picture>
                            <img src="assets/media/products/<?php echo $product['image'] ?>" class="w-[50%]  mx-auto">
                        </picture>
                    </a>
                </div>
                <h3 class="mb-[5px] text-[18px] text-center h-[40px] truncate w-[200px] mx-auto">
                    <a href="" class=""><?php echo $product['name_product'] ?></a>
                </h3>
                <h4 class="mb-[5px] text-[14px] text-center h-[40px] truncate ">
                    <a href="" class=""><?php echo $product['detail'] ?></a>
                </h4>
                <p class="text-center text-[#ff1616] font-light text-[15px]"><?php echo $product['price'] ?> đ</p>
                <button class="hover:bg-[red]">Thêm</button>

            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer() ?>