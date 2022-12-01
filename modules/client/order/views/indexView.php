<?php get_header('', 'Đơn hàng') ?>

<div class="border-b-[2px] p-5 text-center">
    <h3 class="text-[25px] font-bold">Thông tin đơn hàng</h3>
    <p>Quản lý đơn hàng</p>
</div>

<div class="bg-[#f8f8f8]">
    <div class="grid grid-cols-2 gap-5 mx-auto p-5 w-[1300px]">
        <?php foreach ($orders as $value) : ?>
            <div class="p-8 bg-white rounded-[20px] mx-auto">
                <table>
                    <tbody class="text-center">
                        <tr class="flex justify-start mb-5">
                            <th class="w-[200px]">
                                <p class="text-[18px] text-[#222] font-normal">Mã đơn hàng</p>
                            </th>

                            <th class="w-[200px]">
                                <p class="text-[14px] text-[#bbb] font-normal">Thời gian</p>
                            </th>

                            <th class="w-[150px]">
                                <p class="text-[14px] text-[#bbb] font-normal">Trạng thái</p>
                            </th>
                        </tr>

                        <tr class="flex justify-start">
                            <td class="w-[200px]">
                                <p class="text-[18px] leading-[22px] text-[#222] font-normal uppercase"><?php echo $value['code'] ?></p>
                            </td>

                            <td class="w-[200px]">
                                <p class="text-[16px] leading-[22px] text-[#222] font-normal"><?php echo $value['time'] ?></p>
                            </td>

                            <td class="w-[150px]">
                                <?php if ($value['id_status'] == 1) { ?>
                                    <p class="text-[orange]">
                                        <?php echo $value['name_status'] ?>
                                    </p>
                                <?php } elseif ($value['id_status'] == 2) { ?>
                                    <p class="text-[blue]">
                                        <?php echo $value['name_status'] ?>
                                    </p>
                                <?php } elseif ($value['id_status'] == 3) { ?>
                                    <p class="text-[green]">
                                        <?php echo $value['name_status'] ?>
                                    </p>
                                <?php } elseif ($value['id_status'] == 4) { ?>
                                    <p class="text-[red]">
                                        <?php echo $value['name_status'] ?>
                                    </p>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="border-t-[2px] mt-5">
                    <button class="border-[2px] w-[150px] h-[50px] hover:bg-[#d2a98b] float-right mt-5">
                        <a href="?role=client&mod=orderdetail&code=<?php echo $value['code'] ?>">
                            Chi tiết đơn hàng
                        </a>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer() ?>