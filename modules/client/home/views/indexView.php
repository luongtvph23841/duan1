<?php get_header('', 'Trang chủ') ?>

<div class="w-full">
    <div>
        <img src="assets/media/banner/banner.jpg" alt="" class="w-[100%] m-auto">
    </div>

    <div class="flex m-20 justify-center">
        <img src="assets/media/banner/banner-1.png" alt="" class="m-3 hover:scale-[1.1] ease-in duration-500">
        <img src="assets/media/banner/banner-2.png" alt="" class="m-3 hover:scale-[1.1] ease-in duration-500">
        <img src="assets/media/banner/banner-3.png" alt="" class="m-3 hover:scale-[1.1] ease-in duration-500">
    </div>

    <div class="border-b-[1px] text-center">
        <p class="text-[25px] leading-[40px] font-semibold uppercase m-[30px]">Sản phẩm nổi bật</p>
    </div>

    <div class="w-[90%] mx-auto pt-5">
        <div class="grid grid-cols-4 gap-1 w-[90%] mx-auto">
            <?php foreach ($products as $product) : ?>
                <div div class="mx-auto h-auto text-center mb-10">
                    <div>
                        <div class="menu h-[295px] w-[270px] bg-[#f8f8f8] rounded-t hover:border">
                            <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>&id_cate=<?php echo $product['id_cate'] ?>">
                                <img src="assets/media/products/<?php echo $product['image'] ?>" alt="<?php echo $product['name_product'] ?>" class="w-[200px] h-[210px] pt-2 mx-auto hover:scale-[1.4] ease-in duration-500 pt-8">
                            </a>

                            <div class="dropmenu absolute bg-[#333333] w-[270px] leading-[45px]  mt-10 ">
                                <div class="flex justify-around mt-1">
                                    <a href="?role=client&mod=cart">
                                        <p class="text-white text-base pt-2 hover:text-[#d2a98b] uppercase">
                                            <a href="?role=client&mod=cart&id=<?php echo $product['id'] ?>">
                                                <i class="fa fa-sharp fa-solid fa-cart-plus mr-[5px]"></i>Thêm vào giỏ hàng
                                            </a>
                                        </p>
                                    </a>

                                    <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>" class="mt-[-3px]">
                                        <p class="text-white hover:text-[#d2a98b] uppercase">
                                            <i class="fa fa-eye mr-[5px]"></i>Xem
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-[270px] h-[50px] p-3">
                        <h3 class="color-black uppercase ext-[16px] font-semibold text-ellipsis	whitespace-normal leading-none">
                            <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>" class="hover:text-[#d2a98b] leading-[20px]"><?php echo $product['name_product'] ?></a>
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

    <div class="flex justify-center">
        <img src="assets/media/banner/cate-1.png" class="m-1 hover:scale-[1.03] ease-in duration-500 w-[500px]">
        <img src="assets/media/banner/cate-2.png" class="m-1 hover:scale-[1.03] ease-in duration-500 w-[500px]">
        <img src="assets/media/banner/cate-3.png" class="m-1 hover:scale-[1.03] ease-in duration-500 w-[500px]">
    </div>
</div>

<?php get_footer() ?>