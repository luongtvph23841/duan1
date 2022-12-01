<?php get_header('', 'Đơn hàng') ?>

<div class="border-b-[2px] p-5 text-center">
    <h3 class="text-[25px] font-bold">Thông tin đơn hàng</h3>
    <p>Quản lý đơn hàng</p>
</div>

<div class="grid grid-cols-1 gap-10 mx-auto bg-[#f8f8f8] p-5">
    <?php foreach ($orders as $value) : ?>
        <div class="p-5 bg-white rounded-[20px] mx-auto">
            <div class="grid grid-cols-1 m-2">
                <div class="flex justify-end border-b-[2px]">
                    <p class="text-[#26aa99] m-2">Chờ lấy hàng</p>
                    <p class="ml-5 m-2">Đã giao</p>
                </div>

                <div class="flex justify-center border-b-[2px]">
                    <div class="mt-5 flex">
                        <div class="flex">
                            <img src="assets/media/products/<?php echo $value['image'] ?>" class="w-[100px] h-[100px]">

                            <div class="grid grid-cols-1 flex w-[900px]">
                                <h3 class="text-[18px] leading-[22px] text-[#222] font-normal m-2"><?php echo $value['name_product'] ?></h3>
                                <p class="text-[14px] text-[#bbb] font-normal m-2">Loại: Son môi</p>
                                <p class="text-[16px] leading-[22px] text-[#222] font-normal m-2">x<?php echo $value['quantity'] ?></p>
                            </div>
                        </div>

                        <div class="flex float-right">
                            <p class="text-[16px] leading-[22px] text-[red] font-normal my-auto"><?php echo currency_format($value['price']) ?></p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <div class="mt-2 flex">
                        <p class="text-[18px] leading-[22px] text-[#222] font-normal m-5">Tổng số tiền:</p>
                        <p class="text-[18px] leading-[22px] text-[#222] font-normal text-[red] m-5">₫60.000</p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php get_footer() ?>