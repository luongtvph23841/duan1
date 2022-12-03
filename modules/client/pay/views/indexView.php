<?php get_header('', 'Thanh toán'); ?>

<div class="border-b-[2px]">
    <p class="text-[25px] leading-[40px] font-semibold uppercase m-[30px] text-center">thanh toán</p>
</div>

<div class="grid grid-cols-1 w-full bg-[#f8f8f8]">
    <form action="" method="POST">
        <div class="w-[85%] mx-auto bg-[white] mt-10 rounded-[20px]">
            <div class="flex p-4">
                <i class="fa fa-location-arrow text-[20px] mr-3 mt-1"></i>
                <p>Địa chỉ nhận hàng</p>
            </div>

            <div class="flex p-4">
                <p class="font-bold mr-2">
                    <?php echo $users['name_user'] ?>
                </p>

                <p class="font-bold mr-2">
                    <?php echo $users['phone'] ?>
                </p>

                <p>
                    <?php echo $users['address'] ?>
                </p>

                <p class="text-[blue] ml-10">
                    <a href="?role=client&mod=userinfo&id_user=<?php echo $users['id'] ?>">Thay đổi</a>
                </p>
            </div>
        </div>

        <div class="w-[85%] mx-auto bg-[white] mt-5 rounded-[20px]">
            <table class="mx-auto mt-10">
                <tr class="h-[50px]">
                    <th>
                        <p class="text-[18px] text-[#222] text-left font-normal">Sản phẩm</p>
                    </th>

                    <th>
                        <p class="text-[14px] text-[#bbb] font-normal"> Đơn giá</p>
                    </th>

                    <th>
                        <p class="text-[14px] text-[#bbb] font-normal">Số Lượng</p>
                    </th>

                    <th>
                        <p class="text-[14px] text-[#bbb] font-normal">Thành tiền</p>
                    </th>
                </tr>

                <?php foreach ($cart['buy'] as $item) { ?>
                    <tr class="text-center">
                        <td class="flex justify-start">
                            <div class="mt-5 mb-5">
                                <img src="assets/media/products/<?php echo $item['image'] ?>" class="w-[50px] h-[50px] mx-auto">
                            </div>

                            <span class="flex flex-col justify-center overflow-hidden">
                                <p class="whitespace-nowrap overflow-hidden text-ellipsis text-[14px] text-[#222] font-normal"><?php echo $item['name_product'] ?></p>
                            </span>
                        </td>

                        <td class="w-[200px]">
                            <p class="text-[14px] text-[#222] font-normal">
                                <?php echo currency_format($item['price']) ?>
                            </p>
                        </td>

                        <td class="w-[200px]">
                            <p class="text-[14px] text-[#222] font-normal">
                                <?php echo $item['quantity'] ?>
                            </p>
                        </td>

                        <td class="w-[200px]">
                            <p class="text-[14px] text-[#222] font-normal text-[red]">
                                <?php echo currency_format($item['sub_total']) ?>
                            </p>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div class="w-[85%] mx-auto bg-[white] mt-5 rounded-[20px] mb-5">
            <div class="border-b-[2px]">
                <p class="m-5 text-[18px] font-semibold">Tóm tắt</p>
            </div>

            <div class="flex justify-end">
                <div class="w-[300px] h-[220px] bg-[#fffefb]">
                    <div class="p-5">
                        <p class="mt-2 text-[14px] text-[#222] font-normal">
                            Tổng tiền hàng:<span class="float-right"><?php echo currency_format($total); ?></span>
                        </p>

                        <p class="mt-2 text-[14px] text-[#222] font-normal">
                            Phí vận chuyển:<span class="float-right">0%</span>
                        </p>

                        <p class="mt-2 text-[14px] text-[#222] font-normal">
                            Tổng Thanh toán:<span class="float-right text-[red]"><?php echo currency_format($total); ?></span>
                        </p>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b] float-right m-5">
                            <p class="text-black">Đặt hàng</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php get_footer() ?>