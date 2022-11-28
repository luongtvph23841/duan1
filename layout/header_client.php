<?php get_header('base', $title) ?>
<!-- <?php $users = get_auth(); ?> -->

<div class="bg-[#333333]">
    <div class="border-b-[1px]">
        <div class="flex justify-around h-[50px]">
            <div class="my-auto text-[#fff]">
                <div class="lg:inline-flex">
                    <a href="#" class="px-4 py-2 hover:text-[#d2a98b]"><i class="fa fa-phone "></i> 0367370371</a>
                    <a href="#" class="px-4 py-2 hover:text-[#d2a98b]"><i class="fa fa-envelope-open-o"></i> kakashop@gmail.com</a>
                </div>
                <a href="#"><i class="fa fa-facebook px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-twitter px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-google-plus px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-pinterest-p px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-instagram px-4 py-2 hover:text-[#d2a98b]"></i></a>
                <a href="#"><i class="fa fa-vimeo px-4 py-2 hover:text-[#d2a98b]"></i></a>
            </div>
            <?php if (is_auth()) : ?>
                <div>
                    <ul>
                        <li class="menu">
                            <div class="flex ml-[60px] hover:text-[#d2a98b] text-[#fff]">
                                <i class="fa fa-user-circle-o text-[33px] mt-[7px]"></i>
                                <p class="pt-3 pl-3"><?php echo $users['name_user'] ?></p>
                            </div>
                            <ul class="dropmenu absolute bg-[#fff] w-[155px] h-[130px] text-center leading-[40px] text-[15px] rounded-[30px]">
                                <li>
                                    <a href="?role=client&mod=userinfo" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]">Thông tin cá nhân</a>
                                </li>
                                <?php if (is_admin()) : ?>
                                    <li>
                                        <a href="?role=admin" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]">Admin</a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="?role=client&mod=home&action=logout" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]"><i class="fa fa-sign-out"> Đăng xuất</i></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php else : ?>
                <div>
                    <ul>
                        <li class="menu">
                            <div class="flex ml-[60px] text-[#fff]">
                                <i class="fa fa-user-circle-o hover:text-[#d2a98b] text-[33px] mt-[7px]"></i>
                                <p class="pt-3 pl-3">Xin chào</p>
                            </div>
                            <ul class="dropmenu absolute bg-[#fff] w-[155px] h-[90px] text-center leading-[40px] text-[15px] rounded-[30px]">
                                <li>
                                    <a href="http://localhost/duan1/?role=client&mod=login" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]">Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="http://localhost/duan1/?role=client&mod=register" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]">Đăng kí</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="flex justify-around">
        <div class="w-[100px]">
            <a href="?role=client&mod=home"><img src="assets/media/logos/logo-kaka.png" alt="" class=""></a>
        </div>
        <div class="my-auto text-[#fff]">
            <ul class="text-[15px] leading-[15px] font-semibold uppercase">
                <a href="http://localhost/duan1/?role=client&mod=home" class="px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Trang chủ</a>
                <a href="http://localhost/duan1/?role=client&mod=product" class="px-4 py-2 px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Sản phẩm</a>
                <a href="http://localhost/duan1/?role=client&mod=introduce" class="px-4 py-2 px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Giới thiệu</a>
            </ul>
        </div>
        <div class="my-auto flex">
            <div class="bg-[white] rounded-[30px] w-[300px] h-[50px]">
                <div class="mt-[9px]">
                    <!-- <form action="" method="POST"> -->
                    <input type="text" placeholder="Tìm kiếm" class="outline-0 ml-[50px] w-[200px] h-[30px]">
                    <button><i class="fa fa-search hover:text-[#d2a98b]"></i></button>
                    <!-- </form> -->
                </div>
            </div>
            <a href="?role=client&mod=cart"><i class="fa fa-shopping-cart ml-[30px] text-[33px] hover:text-[#d2a98b] text-[#fff] mt-[8px]"></i></a>
        </div>
    </div>
</div>