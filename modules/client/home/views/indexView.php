<?php get_header('', 'Trang chủ') ?>

<div class="w-full my-3">
    <div>
        <img src="assets/media/logos/banner-kaka.jpg" alt="" class="w-[100%] m-auto">
    </div>
    <div class="text-center h-[100px] text-5xl pt-6 text-red-500">
        <h1 class="font-sans text-bold text-rose-400  ">Sản Phẩm Tiêu Biểu </h1>
    </div>
    <div class="w-full my-3">
        <div class="grid grid-cols-4 gap-10 w-[90%] mx-auto">
            <?php foreach ($products as $product) : ?>
                <div class="mx-auto h-auto text-center">
                    <div class="">
                        <div class="menu h-[300px] w-[270px] bg-[#f8f8f8] rounded-t  hover:border">
                            <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>">
                                <img src="assets/media/products/<?php echo $product['image'] ?>" alt="" class="w-[200px] h-[210px] pt-2 mx-auto ">
                            </a>
                            <div class="dropmenu absolute bg-stone-500 w-[270px] leading-[45px]  mt-10 ">
                                <div class="flex justify-around mt-1">
                                    <a href="?role=client&mod=cart">
                                        <p class="text-white text-base pt-2 hover:text-amber-500"><i class="fa fa-plus" aria-hidden="true"></i> ADD TO CART</p>
                                    </a>
                                    <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>">
                                        <i class="fa fa-eye text-[30px] text-white hover:text-amber-500"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[30px]">
                        <h3 class="color-black uppercase font-semibold leading-[16px]">
                            <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>" class="hover:text-pink-800"><?php echo $product['name_product'] ?></a>
                        </h3>
                        <h4 class="color-black leading-[16px] text-[14px] text-[red] mt-[15px]"><?php echo $product['price'] ?> đ</h4>
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