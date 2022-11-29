<?php get_header('', 'Trang chủ') ?>

<div class="w-full">
    <div>
        <img src="assets/media/logos/banner.jpg" alt="" class="w-[100%] m-auto">
    </div>
    <div class="text-center h-[100px] text-5xl pt-6 text-red-500">
        <h1 class="font-sans text-bold text-rose-400">Sản Phẩm Tiêu Biểu </h1>
    </div>
    <div class="w-[90%] mx-auto">
        <div class="grid grid-cols-4 gap-1 w-[90%] mx-auto">
            <?php foreach ($products as $product) : ?>
                <div div class="mx-auto h-auto text-center mb-10">
                    <div>
                        <div class="menu h-[295px] w-[270px] bg-[#f8f8f8] rounded-t hover:border">
                            <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>">
                                <img src="assets/media/products/<?php echo $product['image'] ?>" alt="<?php echo $product['name_product'] ?>" class="w-[200px] h-[210px] pt-2 mx-auto">
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

    <div class="text-center mt-[50px]">
        <a href="?role=client&mod=product">
            <button class="border border-[#EFA969] font-bold w-[100px] h-[40px] text-[18px] hover:bg-[#EFA969] hover:text-white p-1 place-items-center"> Xem thêm</button>
        </a>
    </div>

</div>

<?php get_footer() ?>