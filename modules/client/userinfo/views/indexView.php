<?php get_header('', 'Thông tin cá nhân') ?>

<?php $notifications = get_notification(); ?>

<div class="flex justify-center mx-auto bg-[#f8f8f8] p-5">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="p-5 bg-white rounded-[20px]">
            <div class="border-b-[2px] p-5">
                <h3 class="text-[25px] font-bold">Thông tin cá nhân</h3>
                <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
            </div>

            <div class="flex">
                <div class="grid grid-cols-1 w-[800px] h-[500px]">
                    <div class="flex m-5">
                        <p class="text-[16px] mt-2 mr-5 w-[150px] text-right">Tên</p>
                        <input type="text" name="name" class="border-[2px] outline-0 h-[40px] w-[400px] box-border rounded-[2px] p-4 items-center" value="<?php echo $users['name_user'] ?>">
                    </div>

                    <div class="flex m-5">
                        <p class="font-normal text-[16px] mt-2 mr-5 w-[150px] text-right">Email</p>
                        <input type="text" name="email" class="border-[2px] outline-0 h-[40px] w-[400px] box-border rounded-[2px] p-4 items-center" value="<?php echo $users['email'] ?>">
                    </div>

                    <div class="flex m-5">
                        <p class="font-normal text-[16px] mt-2 mr-5 w-[150px] text-right">Mật khẩu</p>
                        <input type="text" name="password" class="border-[2px] outline-0 h-[40px] w-[400px] box-border rounded-[2px] p-4 items-center" value="<?php echo $users['password'] ?>">
                    </div>

                    <div class="flex m-5">
                        <p class="font-normal text-[16px] mt-2 mr-5 w-[150px] text-right">Số điện thoại</p>
                        <input type="text" name="phone" class="border-[2px] outline-0 h-[40px] w-[400px] box-border rounded-[2px] p-4 items-center" value="<?php echo $users['phone'] ?>">
                    </div>

                    <div class="flex m-5">
                        <p class="font-normal text-[16px] mt-2 mr-5 w-[150px] text-right">Địa chỉ</p>
                        <input type="text" name="address" class="border-[2px] outline-0 h-[40px] w-[400px] box-border rounded-[2px] p-4 items-center" value="<?php echo $users['address'] ?>">
                    </div>
                </div>

                <div class="w-[400px] m-auto">
                    <div class="flex justify-center">
                        <img src="assets/media/users/<?php echo $users['image'] ?>" class="rounded-[50%] w-[100px] h-[100px]">
                    </div>

                    <div class="flex justify-center mt-5">
                        <input type="file" name="img" accept="image/*" />
                    </div>
                </div>
            </div>

            <div class="text-center border-t-[2px]">
                <div class="mt-5 grid grid-cols-1">
                    <form action="" method="POST">
                        <button type="submit" class="w-[50px] h-[50px] bg-[#333333] text-white rounded hover:bg-[#d2a98b] items-center mx-auto">
                            <a href="?role=client&mod=userinfo">
                                <p class="text-white text-base uppercase">Lưu</p>
                            </a>
                        </button>
                    </form>

                    <?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg) : ?>
                            <span class="text-center mt-5 text-[red] <?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </form>
</div>

<?php get_footer() ?>