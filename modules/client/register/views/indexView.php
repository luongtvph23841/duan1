<?php get_header('', 'Đăng kí') ?>

<div class="bg-[#f8f8f8] h-[800px]">
    <div class="text-center p-10">
        <h1 class="text-[48px] text-[#333333] font-semibold tracking-[0.1px] uppercase">welcom</h1>
        <h3 class="text-[18px] text-[#333333] font-normal tracking-[0.5px] mt-[10px] leading-none">Register your account</h3>
    </div>

    <div class="rounded-[5px] bg-[white] w-[500px] grid -grid-cols-1 mx-auto mt-5 border-[2px]">
        <div class="mt-10">
            <form class="form" id="kt_login_signin_form" method="post" action="">
                <div class="m-5">
                    <input class="p-5 h-[45px] border-[2px] outline-0 text-[#333333] rounded-[5px] w-[460px]" type="text" placeholder="Tên người dùng" name="name" autocomplete="off" />
                </div>

                <div class="m-5">
                    <input class="p-5 h-[45px] border-[2px] outline-0 text-[#333333] rounded-[5px] w-[460px]" type="text" placeholder="Email" name="email" autocomplete="off" />
                </div>

                <div class="m-5">
                    <input class="p-5 h-[45px] border-[2px] outline-0 text-[#333333] rounded-[5px] w-[460px]" type="password" placeholder="Password" name="password" />
                </div>

                <div class="m-5">
                    <input class="p-5 h-[45px] border-[2px] outline-0 text-[#333333] rounded-[5px] w-[460px]" type="text" placeholder="Số điện thoại" name="phone" autocomplete="off" />
                </div>

                <div class="m-5">
                    <input class="p-5 h-[45px] border-[2px] outline-0 text-[#333333] rounded-[5px] w-[460px]" type="text" placeholder="Địa chỉ" name="address" autocomplete="off" />
                </div>

                <div class="grid grid-cols-1">
                    <button id="kt_login_signin_submit" class="mx-auto bg-[#cea679] w-[100px] h-[45px] text-[16px] font-semibold leading-[12px]  hover:text-[#ffffff] hover:bg-[#333333]">
                        <p class="mx-autotext-[#ffffff]">
                            Đăng ký</p>
                    </button>

                    <?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg) : ?>
                            <span class="text-center mt-5 text-[red] <?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

                    <div class="text-center m-5">
                        <a href="?role=client&mod=login" class="text1">Bạn đã có tài khoản đăng nhập?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer() ?>