<?php get_header('', 'Sản phẩm') ?>

<div class="border-b-[1px]">
    <div class="grid grid-cols-2 w-[90%] mx-auto">
        <div class="text-[25px] leading-[40px] font-semibold uppercase m-[30px]">
            <p>Sản phẩm</p>
        </div>
        <div class="grid grid-cols-2">
            <div class="m-[30px]">
                <label>Sắp xếp:</label>
                <select class="form-control select2 bg-[#fff] border-[1px] box-border cursor-pointer text-[14px] font-normal h-[42px] leading-[40px] pl-18[px] pr-[30px] select-none whitespace-nowrap outline-none rounded-[5px]">
                    <option value="Select" class="outline">Chọn</option>
                    <option value="Name, A to Z">Tên từ A đến Z</option>
                    <option value="Name, Z to A">Tên từ Z đến A</option>
                    <option value="Price, low to high">Giá từ thấp đến cao</option>
                    <option value="Price, high to low">Giá từ cao đến thấp</option>
                </select>
            </div>
            <div class="m-[30px]">
                <label>Hiện:</label>
                <select class="form-control select2 bg-[#fff] border-[1px] box-border cursor-pointer text-[14px] font-normal h-[42px] leading-[40px] pl-18[px] pr-[30px] select-none whitespace-nowrap outline-none rounded-[5px]">
                    <option value="9" class="">12</option>
                    <option value="15">20</option>
                    <option value="30">32</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="w-[90%] mx-auto mt-10">
    <div class="grid grid-cols-4 gap-1 w-[90%] mx-auto">
        <?php foreach ($products as $product) : ?>
            <div div class="mx-auto h-auto text-center mb-10">
                <div class="">
                    <div class="menu h-[295px] w-[270px] bg-[#f8f8f8] rounded-t hover:border">
                        <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>">
                            <img src="assets/media/products/<?php echo $product['image'] ?>" alt="<?php echo $product['name_product'] ?>" class="w-[200px] h-[210px] pt-2 mx-auto">
                        </a>
                        <div class="dropmenu absolute bg-stone-500 w-[270px] leading-[45px]  mt-10 ">
                            <div class="flex justify-around mt-1">
                                <a href="?role=client&mod=cart">
                                    <p class="text-white text-base pt-2 hover:text-amber-500 uppercase">
                                        <i class="fa fa-sharp fa-solid fa-cart-plus mr-[5px]"></i>Thêm vào giỏ hàng
                                    </p>
                                </a>
                                <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>" class="mt-[-3px]">
                                    <p class="text-white hover:text-amber-500 uppercase">
                                        <i class="fa fa-eye mr-[5px]"></i>Xem
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-[30px]">
                    <h3 class="color-black uppercase ext-[16px] font-semibold text-ellipsis	whitespace-normal leading-none">
                        <a href="?role=client&mod=productinfo&id_prod=<?php echo $product['id'] ?>" class="hover:text-amber-500"><?php echo $product['name_product'] ?></a>
                    </h3>
                    <h4 class="color-black leading-[16px] text-[16px] text-[#cea679] mt-[15px] font-light leading-tight"><?php echo $product['price'] ?>₫</h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer() ?>