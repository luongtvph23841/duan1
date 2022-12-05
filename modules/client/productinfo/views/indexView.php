<?php get_header('', 'Thông tin sản phẩm') ?>
<?php $notifications = get_notification(); ?>

<div class="text-[25px] leading-[40px] font-semibold uppercase p-[30px] border-b-[2px] ">
    <a href="?role=client&mod=product">Sản phẩm</a> <i class="fa fa-angle-right m-[5px]"> </i><?php echo $product['name_product'] ?>
</div>

<div class="flex font-sans w-[1000px] h-[500px] mt-[50px] mx-auto">
    <div class="pr-8 bg-[#f8f8f8] mr-6 rounded mb-4 ">
        <img src="assets/media/products/<?php echo $product['image'] ?>" alt="" class="h-[300px] w-[700px] mt-20 hover:scale-[1.4] ease-in duration-500 pt-8" loading="lazy" />
    </div>

    <div>
        <div class="information-product w-full">
            <div class="flex flex-wrap items-baseline border-b-[2px]">
                <h1 class="w-full flex-none mb-3 text-2xl leading-none text-[24px] font-semibold">
                    <?php echo $product['name_product'] ?>
                </h1>
                <div class="flex-auto text-lg font-medium text-[#d2a98b] h-[40px]">
                    <?php echo currency_format($product['price']) ?>
                </div>
                <div class="grid grid-cols-2">
                    <p class="font-semibold">
                        Lượt xem:
                    </p>
                    <p class="ml-1">
                        <?php echo $product['view'] ?>
                    </p>
                    <p class="font-semibold">
                        Số lượng:
                    </p>
                    <p class="ml-1">
                        <?php echo $product['quantity'] ?>
                    </p>
                </div>
            </div>

            <div>
                <!-- <p class="mt-5 text-base uppercase font-bold">Số lượng: </p> -->
                <div class="box-quantity h-[50px] mt-3">
                    <div class="flex">
                        <form method="POST" action="">
                            <button class="w-[220px] h-[50px] bg-[#333333] text-white rounded hover:bg-[#d2a98b]">
                                <p class="text-white text-base uppercase">
                                    <a href="?role=client&mod=cart&id=<?php echo $product['id'] ?>">
                                        <i class="fa fa-sharp fa-solid fa-cart-plus mr-[5px]"></i>Thêm vào giỏ hàng
                                    </a>
                                </p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <p class="text-slate-500 mb-6 pb-6 border-slate-200 font-sans text-black p-4 leading-[25px]">
                <?php echo $product['detail'] ?>
            </p>

            <div class="h-[60px] pt-4 border-t-[2px] border-b-[2px] mt-5 flex">
                <p class="text-base uppercase font-bold">
                    danh mục:
                </p>

                <a href="?role=client&mod=search&id_cate=<?php echo $product['id_cate'] ?>" class="ml-1 text-red-500 hover:text-[#d2a98b]">
                    <?php echo $product['name_cate'] ?>
                </a>
            </div>

            <div class="h-[60px] pt-5 border-b-[2px] flex">
                <p class="text-base uppercase font-bold">
                    xuất xứ:
                </p>
                <a href="?role=client&mod=search&id_orgin=<?php echo $product['id_orgin'] ?>" class="ml-1 text-red-500 hover:text-[#d2a98b]">
                    <?php echo $product['name_orgin'] ?>
                </a>
            </div>

            <div class="pt-3">
                <a class="uppercase font-bold">
                    chia sẻ:
                </a>
                <a href="#">
                    <i class="fa fa-facebook px-4 py-2 hover:text-[#d2a98b]"></i>
                </a>

                <a href="#">
                    <i class="fa fa-twitter px-4 py-2 hover:text-[#d2a98b]"></i>
                </a>

                <a href="#">
                    <i class="fa fa-google-plus px-4 py-2 hover:text-[#d2a98b]"></i>
                </a>

                <a href="#">
                    <i class="fa fa-pinterest-p px-4 py-2 hover:text-[#d2a98b]"></i>
                </a>

                <a href="#">
                    <i class="fa fa-instagram px-4 py-2 hover:text-[#d2a98b]"></i>
                </a>

                <a href="#">
                    <i class="fa fa-vimeo px-4 py-2 hover:text-[#d2a98b]"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="w-[1000px] mx-auto">
    <div class="text-[20px] leading-[40px] font-semibold uppercase p-[30px]">
        <h3>Sản phẩm cùng loại</h3>
    </div>

    <div class="grid grid-cols-4 gap-1 mx-auto">
        <?php foreach ($product_by_id_cate as $product) : ?>
            <div div class="mx-auto h-auto text-center mb-10">
                <div>
                    <div class="menu h-[215px] w-[230px] bg-[#f8f8f8] rounded-t hover:border-[2px]">
                        <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>&id_cate=<?php echo $product['id_cate'] ?>">
                            <img src="assets/media/products/<?php echo $product['image'] ?>" alt="<?php echo $product['name_product'] ?>" class="w-[160px] h-[150px] pt-2 mx-auto hover:scale-[1.2] ease-in duration-500 pt-8">
                        </a>

                        <div class="dropmenu absolute bg-[#333333] w-[230px] leading-[45px] mt-5">
                            <div class="flex justify-around mt-1">
                                <a href="?role=client&mod=cart">
                                    <p class="text-white text-base pt-2 hover:text-[#d2a98b]">
                                        <a href="?role=client&mod=cart&id=<?php echo $product['id'] ?>">
                                            <i class="fa fa-sharp fa-solid fa-cart-plus mr-[5px]"></i>Thêm vào giỏ hàng
                                        </a>
                                    </p>
                                </a>

                                <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>&id_cate=<?php echo $product['id_cate'] ?>" class="mt-[-3px]">
                                    <p class="text-white hover:text-[#d2a98b]">
                                        <i class="fa fa-eye mr-[5px]"> <?php echo $product['view'] ?></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[230px] h-[50px] p-3">
                    <h3 class="color-black ext-[16px] font-semibold text-ellipsis whitespace-normal leading-none">
                        <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>&id_cate=<?php echo $product['id_cate'] ?>" class="hover:text-[#d2a98b] leading-[20px]"><?php echo $product['name_product'] ?></a>
                    </h3>
                </div>

                <div class="pt-5">
                    <h4 class="color-black leading-[16px] text-[16px] text-[#cea679] mt-[15px] font-light leading-tight"><?php echo currency_format($product['price']) ?>
                    </h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="font-sans w-[1000px] h-auto mt-[50px] mx-auto">
    <div class="grid grid-cols-2 gap-1 mb-[10px] text-[#ffffff] w-[300px] h-[40px]">
        <div class="bg-[#cea679] w-[full]">
            <p class="leading-10 pl-[30px] text-[15px] uppercase">
                Bình luận
            </p>
        </div>
    </div>

    <div>
        <?php foreach ($comment as $cmt) : ?>
            <div class="flex mt-[10px]">
                <div class="mr-[5px]">
                    <img src="assets/media/users/<?php echo $cmt['image'] ?>" class="w-[80px] h-[80px]" alt="">
                </div>

                <div class="border-[2px] w-full h-auto">
                    <p class="m-[15px]">
                        <?php echo $cmt['name_user'] ?> - <?php echo $cmt['time'] ?>
                    </p>

                    <div class="m-[15px]">
                        <p>
                            <?php echo $cmt['content'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="mt-20 border-t-[2px]">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="flex pt-4">
                    <div>
                        <textarea name="content" cols="115" rows="5" class="bg-[#f5f5f5] border-none"></textarea>
                    </div>
                    <button type="submit" class="w-[50px] h-[30px] bg-[#333333] text-white rounded hover:bg-[#d2a98b]">
                        <p class="">Gửi</p>
                    </button>
                </div>
            </form>

            <?php foreach ($notifications as $notification) : ?>
                <div class="m-[10px] text-[red]">
                    <?php foreach ($notification['msgs'] as $msg) : ?>
                        <div class="<?php echo $notification['type'] ?>"><?php echo $msg ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer() ?>