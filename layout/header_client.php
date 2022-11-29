<?php get_header('base', $title) ?>
<!-- <?php $users = get_auth(); ?> -->

<?php function get_list_categories()
{
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}

$categories = get_list_categories(); ?>

<div class="bg-[#333333]">
    <div class="border-b-[1px]">
        <div class="flex justify-around h-[50px]">
            <div class="my-auto text-[#fff]">
                <div class="lg:inline-flex">
                    <a href="#" class="px-4 py-2 hover:text-[#d2a98b]"><i class="fa fa-phone"></i> 0123456789</a>
                    <a href="#" class="px-4 py-2 hover:text-[#d2a98b]"><i class="fa fa-envelope-o"></i> kakashop@gmail.com</a>
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
                                <img src="assets/media/users/<?php echo $users['image'] ?>" class="rounded-[50%] w-[20%] h-[20%] mt-[10px]">
                                <p class="pt-3 pl-2"><?php echo $users['name_user'] ?></p>
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
            <a href="?role=client&mod=home"><img src="assets/media/logos/logo-kaka.png" class=" hover:scale-[1.1] ease-in duration-500"></a>
        </div>
        <div class="my-auto text-[#fff]">
            <ul class="text-[15px] leading-[15px] font-semibold">
                <li class="inline">
                    <a href="http://localhost/duan1/?role=client&mod=home" class="px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Trang chủ</a>
                </li>
                <li class="inline menu">
                    <a href="http://localhost/duan1/?role=client&mod=product" class="px-4 py-2 px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Sản phẩm</a>
                    <ul class="dropmenu absolute border bg-[#fff] text-black ml-[100px] mt-1 rounded-[20px]">
                        <?php foreach ($categories as $category) : ?>
                            <li class="hover:text-[#d2a98b] m-5"><a href="?role=client&mod=search&id_cate=<?php echo $category['id'] ?>"><?php echo $category['name_cate'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="inline">
                    <a href="http://localhost/duan1/?role=client&mod=introduce" class="px-4 py-2 px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Giới thiệu</a>
                </li>
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