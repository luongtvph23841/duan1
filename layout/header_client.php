<?php get_header('base', $title) ?>

<!-- <?php
        if (isset(get_auth()['id'])) {
            $id_user = get_auth()['id'];

            function get_user($id_user)
            {
                $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = $id_user ");
                return $result;
            }
            $users = get_user($id_user);
        }

        function get_list_categories()
        {
            $result = db_fetch_array("SELECT * FROM `categories`");
            return $result;
        }
        $categories = get_list_categories();

        if (isset($_SESSION['cart']['buy'])) {
            $count_cart = count($_SESSION['cart']['buy']);
        } else {
            $count_cart = 0;
        }
        ?> -->

<div class="w-full bg-[#333333]">
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
                                <img src="assets/media/users/<?php echo $users['image'] ?>" class="rounded-[50%] w-[30px] h-[30px] mt-[10px]">
                                <p class="pt-3 pl-2 w-[200px]"><?php echo $users['name_user'] ?></p>
                            </div>
                            <ul class="dropmenu absolute bg-[#fff] border-[2px] text-black ml-[60px] rounded-[20px] font-normal leading-[35px] text-[13px] w-[150px] h-[150px] text-center">
                                <li>
                                    <a href="?role=client&mod=userinfo&id_user=<?php echo $users['id'] ?>" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px] m-1">Th??ng tin c?? nh??n</a>
                                </li>
                                <li>
                                    <a href="?role=client&mod=order&id_user=<?php echo $users['id'] ?>" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px] m-1">????n h??ng</a>
                                </li>
                                <?php if (is_admin()) : ?>
                                    <li>
                                        <a href="?role=admin&mod=home" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px] m-1">Admin</a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="?role=client&mod=home&action=logout" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px] m-1"><i class="fa fa-sign-out"> ????ng xu???t</i></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php else : ?>
                <div>
                    <ul>
                        <li class="menu">
                            <div class="flex ml-[60px] text-[#fff] hover:text-[#d2a98b]">
                                <i class="fa fa-user-circle-o text-[33px] mt-[7px]"></i>
                                <p class="pt-3 pl-3">Xin ch??o</p>
                            </div>
                            <ul class="dropmenu absolute bg-[#fff] border-[2px] text-black ml-[60px] rounded-[20px] font-normal leading-[35px] text-[13px] w-[150px] h-[90px] text-center">
                                <li>
                                    <a href="http://localhost/duan1/?role=client&mod=login" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]">????ng nh???p</a>
                                </li>
                                <li>
                                    <a href="http://localhost/duan1/?role=client&mod=register" class="hover:text-[#d2a98b] border-b-[1px] p-[10px] leading-[24px]">????ng k??</a>
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
                    <a href="http://localhost/duan1/?role=client&mod=home" class="px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Trang ch???</a>
                </li>
                <li class="inline menu">
                    <a href="http://localhost/duan1/?role=client&mod=product" class="px-4 py-2 px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">S???n ph???m</a>
                    <ul class="dropmenu absolute bg-[#fff] border-[2px] text-black ml-[100px] rounded-[20px] font-normal leading-[35px] text-[13px] w-[120px] text-center">
                        <?php foreach ($categories as $category) : ?>
                            <li class="hover:text-[#d2a98b] m-2 border-b-[1px]"><a href="?role=client&mod=search&id_cate=<?php echo $category['id'] ?>"><?php echo $category['name_cate'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="inline">
                    <a href="http://localhost/duan1/?role=client&mod=introduce" class="px-4 py-2 px-4 py-2 hover:text-[#d2a98b] hover:rounded-[30px]">Gi???i thi???u</a>
                </li>
            </ul>
        </div>
        <div class="my-auto flex">
            <div class="bg-[white] rounded-[30px] w-[300px] h-[50px]">
                <div class="mt-[9px]">
                    <form action="?role=client&mod=search" method="POST">
                        <input type="text" name="keyword" placeholder="T??m ki???m" class="outline-0 ml-[50px] w-[200px] h-[30px]">
                        <button type="submit" name="search">
                            <i class="fa fa-search hover:text-[#d2a98b]"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div>
                <a href="?role=client&mod=cart">
                    <i class="fa fa-shopping-cart ml-[30px] text-[33px] hover:text-[#d2a98b] text-[#fff] mt-[8px]">
                        <p class="absolute text-[16px] mt-[-37px] ml-[22px] font-bold bg-[#d2a98b] rounded-[50%] w-[17px] h-[17px] text-center text-[white]">
                            <?php if (isset($count_cart)) {
                                echo $count_cart;
                            } ?>
                        </p>
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>