<?php get_header() ?>
<title>Trang chủ</title>

<div class="w-full my-3">
    <div>
        <img src="assets/media/logos/banner-kaka.jpg" alt="" class="w-[70%] m-auto">
    </div>
    <div class="text-center h-[100px] text-5xl pt-6 text-red-500">
        <h1 class="font-sans text-bold  ">Sản Phẩm Tiêu Biểu </h1>
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
                    <p class="text-center text-[#ff1616] font-light text-[15px]">1,285,000₫</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="text-center">
        <a href="?role=client&mod=product">
            <button class="border border-[#EFA969] font-bold w-[100px] h-[40px] text-[18px] hover:bg-[#EFA969] hover:text-white p-1 place-items-center"> Xem thêm</button>
        </a>
    </div>

</div>


<?php get_footer() ?>