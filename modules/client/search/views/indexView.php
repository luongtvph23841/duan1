<?php
get_header('', 'tìm kiếm')
?>
<div>
    <div class=" w-full m-auto ml-2">
        <scan> <i class="fa fa-lightbulb-o hover:text-yellow-500 text-xl" aria-hidden="true" class="hover:bg-yellow-400 "></i> Kết quả tìm kiếm cho từ khóa :</scan>
        <scan class="text-rose-500">Son môi</scan>
    </div>
    <div class="h-[60px] flex bg-gray-200 ">
        <div class="w-full pt-4 ml-2 ">
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Sắp xếp theo</button>
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Liên quan</button>
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Mới nhất</button>
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Bán chạy</button>
            <select class="hover:bg-neutral-500 hover:text-white rounded h-[30px] w-[100px]">
                <option selected>Giá</option>
                <option value="1">150.000</option>
                <option value="2">250.000</option>
                <option value="3">350.000</option>
            </select>
        </div>
        <div></div>
    </div>

    <div class="pt-2 grid grid-cols-4 ml-12 mb-4">
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
                                        <a href="?role=client&mod=cart&id=<?php echo $product['id'] ?>">
                                            <i class="fa fa-sharp fa-solid fa-cart-plus mr-[5px]"></i>Thêm vào giỏ hàng
                                        </a>
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
                    <h4 class="color-black leading-[16px] text-[16px] text-[#cea679] mt-[15px] font-light leading-tight"><?php echo currency_format($product['price']) ?></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>



</div>
<?php
get_footer()
?>