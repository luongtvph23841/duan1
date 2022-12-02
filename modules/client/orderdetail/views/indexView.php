<?php get_header('', 'Chi tiết đơn hàng') ?>

<div class="bg-[#f8f8f8]">
    <div class="border-b-[2px] p-5 text-center">
        <h3 class="text-[25px] font-bold">Chi tiết đơn hàng </h3>
        <p>Xem thông tin đơn hàng</p>
    </div>

    <div class="mt-5 w-[1300px] mx-auto pb-10">
        <div class="mt-10 mt-5 rounded-[5px] bg-[white] mt-6">
            <div class="grid grid-cols-3 text-[18px] leading-[16px] mx-auto border-b-[2px] p-5">
                <span class="mt-5 hover:text-[#d2a98b]">
                    <a href="?role=client&mod=order&id_user=<?php echo get_auth()['id'] ?>">
                        Trở lại
                    </a>
                </span>

                <span class="uppercase mt-5 text-center">
                    Mã đơn hàng: <?php echo $_GET['code'] ?>
                </span>

                <span class="flex justify-end mt-5 text-center">
                    Trạng thái:<?php if ($orders['id_status'] == 1) { ?>
                    <p class="text-[orange] ml-2">
                        <?php echo $orders['name_status'] ?>
                    </p>
                <?php } elseif ($orders['id_status'] == 2) { ?>
                    <p class="text-[blue] ml-2">
                        <?php echo $orders['name_status'] ?>
                    </p>
                <?php } elseif ($orders['id_status'] == 3) { ?>
                    <p class="text-[green] ml-2">
                        <?php echo $orders['name_status'] ?>
                    </p>
                <?php } elseif ($orders['id_status'] == 4) { ?>
                    <p class="text-[red] ml-2">
                        <?php echo $orders['name_status'] ?>
                    </p>
                <?php } ?>
                </span>
            </div>

            <div class="border-b-[2px]">
                <div class="flex m-10">
                    <h3 class="font-bold mr-2">Địa chỉ giao hàng: </h3>
                    <p class="ml-2"><?php echo get_auth()['name_user'] ?></p>
                    <p class="ml-2"><?php echo get_auth()['phone'] ?></p>
                    <p class="ml-2"><?php echo get_auth()['address'] ?></p>
                </div>
            </div>

            <div>
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

                    <?php foreach ($orderdetail as $order) : ?>
                        <tr class="text-center">
                            <td class="flex justify-start">
                                <div class="mt-5 mb-5">
                                    <img src="assets/media/products/<?php echo $order['image'] ?>" class="w-[50px] h-[50px] mx-auto">
                                </div>

                                <span class="flex flex-col justify-center overflow-hidden">
                                    <p class="whitespace-nowrap overflow-hidden text-ellipsis text-[14px] text-[#222] font-normal"><?php echo $order['name_product'] ?></p>
                                </span>
                            </td>

                            <td class="w-[200px]">
                                <p class="text-[14px] text-[#222] font-normal">
                                    <?php echo currency_format($order['price']) ?>
                                </p>
                            </td>

                            <td class="w-[200px]">
                                <p class="text-[14px] text-[#222] font-normal">
                                    <?php echo $order['quantity'] ?>
                                </p>
                            </td>

                            <td class="w-[200px]">
                                <p class="text-[14px] text-[#222] font-normal text-[red]">
                                    <?php
                                    $total = 0;
                                    $total += $order['price'] * $order['quantity'];
                                    echo currency_format($total) ?>
                                </p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="flex justify-center">
                <div class="w-[300px] h-[220px] bg-[#fffefb]">
                    <div class="p-5">
                        <p class="mt-2 text-[14px] text-[#222] font-normal">
                            Tổng tiền hàng:<span class="float-right">
                                <?php echo currency_format($orders['total_price']) ?>
                            </span>
                        </p>

                        <p class="mt-2 text-[14px] text-[#222] font-normal">
                            Phí vận chuyển:<span class="float-right">0%</span>
                        </p>

                        <p class="mt-2 text-[14px] text-[#222] font-normal">
                            Tổng Thanh toán:
                            <span class="float-right text-[red]">
                                <?php echo currency_format($orders['total_price']) ?>
                            </span>
                        </p>
                    </div>

                    <?php if ($orders['id_status'] != 3 && $orders['id_status'] != 4) { ?>
                        <div class="mt-5 flex justify-center">
                            <a href="?role=client&mod=orderdetail&code=<?php echo $orders['code'] ?>&action=cancel">
                                <button type="submit" class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b] m-5">
                                    <p class="text-black">Hủy đơn</p>
                                </button>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>