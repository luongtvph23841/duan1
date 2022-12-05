<?php get_header('', 'Sản phẩm') ?>

<div class="border-b-[2px]">
    <div class="grid grid-cols-2 mx-auto">
        <div class="text-[25px] leading-[40px] font-semibold uppercase m-[30px]">
            <p>Sản phẩm</p>
        </div>

        <form action="" method="POST">
            <div class="flex justify-end">
                <div class="mt-[30px] mr-[30px]">
                    <label>Sắp xếp:</label>

                    <select class="form-control select2 bg-[#fff] border-[2px] box-border cursor-pointer text-[14px] font-normal h-[42px] leading-[40px] pl-[15px] pr-[15px] select-none whitespace-nowrap outline-none rounded-[5px]" name="sort">
                        <option value="0">Chọn</option>
                        <option value="1">Tên từ A đến Z</option>
                        <option value="2">Tên từ Z đến A</option>
                        <option value="3">Giá từ thấp đến cao</option>
                        <option value="4">Giá từ cao đến thấp</option>
                    </select>
                </div>

                <button type="submit" class="bg-[#cea679] w-[70px] h-[42px] hover:text-[#ffffff] hover:bg-[#333333] text-center rounded-[5px] mt-[30px] mr-[30px]">
                    <p class="text-[18px] font-semibold">Lọc</p>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="w-[90%] mx-auto mt-10">
    <div class="grid grid-cols-4 gap-1 w-[90%] mx-auto">
        <?php foreach ($products as $product) : ?>
            <div div class="mx-auto h-auto text-center mb-10">
                <div>
                    <div class="menu h-[295px] w-[270px] bg-[#f8f8f8] rounded-t hover:border-[2px]">
                        <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>&id_cate=<?php echo $product['id_cate'] ?>">
                            <img src="assets/media/products/<?php echo $product['image'] ?>" alt="<?php echo $product['name_product'] ?>" class="w-[200px] h-[210px] pt-2 mx-auto hover:scale-[1.4] ease-in duration-500 pt-8">
                        </a>

                        <div class="dropmenu absolute bg-[#333333] w-[268px] leading-[45px] mt-10 ">
                            <div class="flex justify-around mt-1">
                                <a href="?role=client&mod=cart">
                                    <p class="text-white text-base pt-2 hover:text-[#d2a98b] mr-10">
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

                <div class="w-[270px] h-[50px] p-3">
                    <h3 class="color-black ext-[16px] font-semibold text-ellipsis whitespace-normal leading-none">
                        <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>&id_cate=<?php echo $product['id_cate'] ?>" class="hover:text-[#d2a98b] leading-[20px]">
                            <?php echo $product['name_product'] ?>
                        </a>
                    </h3>
                </div>

                <div class="pt-5">
                    <h4 class="color-black leading-[16px] text-[16px] text-[#cea679] mt-[15px] font-light leading-tight">
                        <?php echo currency_format($product['price']) ?>
                    </h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer() ?>