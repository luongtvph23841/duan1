<?php get_header('', 'Giỏ hàng') ?>


<div class="h-auto mb-5">
    <div class="border-b-[1px]">
        <p class="text-[25px] leading-[40px] font-semibold uppercase m-[30px] text-center">giỏ hàng</p>
    </div>

    <div>
        <?php
        if (isset($cart)) {
        ?>
            <form action="" method="POST">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Ten sp</th>
                            <th>Gia san pham</th>
                            <th>So luong</th>
                            <th>Thanh tien</th>
                            <th>Hanh dong</th>
                        </tr>
                    </thead>
                    <tbody>



                        <?php
                        foreach ($cart['buy'] as $item) {
                        ?>
                            <tr>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['title'] ?></td>
                                <td><?php echo $item['price'] ?></td>
                                <td><input type="number" min="1" max="30" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>"></td>
                                <td><?php echo $item['sub_total'] ?></td>
                                <td><a href="?mod=cart&action=delete&id=<?php echo $item['id'] ?>">Xóa</a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
                <input type="submit" id="update_cart" name="btn_update" value="Cập nhật giỏ hàng">
            </form>
        <?php
        } else {
            echo "Không co phan tu nao trong gio hang";
        }
        ?>
        <p>Tổng giá: <?php echo currency_format($total); ?></p>
        <a href="">Cap nhat gio hang</a><br><br>
        <a href="?mod=cart&action=delete">Xóa toàn bộ giỏ hàng</a>
        <a href="">Thanh toan</a>
    </div>
</div>

<?php get_footer() ?>