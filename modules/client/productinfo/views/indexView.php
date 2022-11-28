<?php get_header('', 'Thông tin sản phẩm') ?>
<?php $notifications = get_notification(); ?>

<div class="text-[25px] leading-[40px] font-semibold uppercase p-[30px] border-b-[1px] ">
    <a href="?role=client&mod=product">Sản phẩm</a> <i class="fa fa-angle-right m-[5px]"> </i><?php echo $product['name_product'] ?>
</div>

<div class="flex font-sans w-[1000px] h-[500px] mt-[50px] mx-auto">
    <div class="pr-8 bg-[#f8f8f8] mr-6 rounded mb-4 ">
        <img src="assets/media/products/<?php echo $product['image'] ?>" alt="" class="h-[300px] w-[700px] mt-20" loading="lazy" />
    </div>
    <div>
        <div class="information-product w-full">
            <div class="flex flex-wrap items-baseline">
                <h1 class="w-full flex-none mb-3 text-2xl leading-none text-[24px] font-semibold">
                    <?php echo $product['name_product'] ?>
                </h1>
                <div class="flex-auto text-lg font-medium text-[#d2a98b] h-[40px] border-b-2">
                    <?php echo currency_format($product['price']) ?>
                </div>
            </div>
            <div class="">
                <p class="mt-5 text-base uppercase font-bold">Số lượng: </p>
                <div class="box-quantity h-[50px] mt-3">
                    <div class="flex">
                        <input type="number" name="quantity" value="1" min=1 class="w-[100px] h-[50px] border-2 rounded mr-2 text-center outline-none">
                        <button class="w-[220px] h-[50px] bg-[#333333] text-white rounded hover:bg-[#d2a98b]">
                            <p class="text-white text-base uppercase">
                                <i class="fa fa-sharp fa-solid fa-cart-plus mr-[5px]"></i>Thêm vào giỏ hàng
                            </p>
                        </button>
                    </div>
                </div>
            </div>
            <p class="text-slate-500 mb-6 pb-6 border-b border-slate-200 font-sans text-black pt-4 leading-[25px]">
                <?php echo $product['detail'] ?>
            </p>
            <div class="h-[60px] pt-4 border-t mt-5">
                <scan class="text-base uppercase font-bold">danh mục: </scan>
                <scan class="text-base">Son Mac Chili, Phấn Phủ MAC NC15</scan>
            </div>
            <div class=" pt-5 border-t">
                <a class="uppercase font-bold">chia sẻ: </a>
                <a href="#"><i class="fa fa-facebook px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-twitter px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-google-plus px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-pinterest-p px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-instagram px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-vimeo px-4 py-2 hover:text-[#d2a98b]"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="font-sans w-[1000px] h-auto mt-[50px] mx-auto">
    <div class="grid grid-cols-2 gap-1 mb-[10px] text-[#ffffff] w-[300px] h-[40px]">
        <div class="bg-[#cea679] w-[full]">
            <p class="leading-10 pl-[30px] text-[15px] uppercase">Bình luận</p>
        </div>
    </div>
    <div class="">
        <?php foreach ($comment as $cmt) : ?>
            <div class="flex mt-[10px]">
                <div class="mr-[5px]">
                    <img src="assets/media/users/<?php echo $cmt['image'] ?>" class="w-[80px] h-[80px]" alt="">
                </div>
                <div class="border-[1px] w-full h-auto">
                    <p class="m-[15px]">
                        <?php echo $cmt['name_user'] ?> - <?php echo $cmt['time'] ?>
                    </p>
                    <div class="m-[15px]">
                        <p><?php echo $cmt['content'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="mt-20 border-t-[1px]">
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