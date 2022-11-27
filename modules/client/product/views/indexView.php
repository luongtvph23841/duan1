<?php get_header() ?>
<title>Sản phẩm</title>
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