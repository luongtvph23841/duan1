<?php get_header('', 'Thanh toán') ?>

<div class="w-full flex justify-between bg-rose-300 ">
    <div class="w-[500px] ml-4  mr-4">
        <h1 class="">Thông tin khách hàng</h1>
        <div class="flex justify-between">
            <div>
                <p> <i class="fa fa-address-book" aria-hidden="true"></i> Họ Tên:</p>
            </div>
            <div>
                <p>Danh xưng:</p>
            </div>

        </div>
        <div class="flex justify-between">
            <div>
                <input type="text" placeholder="Vui lòng nhập họ tên đầy đủ" class="text-xs border border-black rounded w-[230px]">

            </div>
            <div>
                <input type="radio">Anh
                <br>
                <input type="radio">Chị
            </div>

        </div>
        <div>
            <p> <i class="fa fa-phone-square" class="bg-red-300"></i> Số điện thoại:</p>
        </div>
        <div>
            <input type="text" placeholder="Vui lòng nhập số điện thoại " class="text-xs border border-black rounded w-[230px]">
        </div>
        <div>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ:</p>
        </div>
        <div class="flex justify-between">
            <div>
                <input type="text" placeholder="Nhập Tỉnh,Thành Phố" class="text-xs border border-black rounded w-[230px]">

            </div>
            <div>
                <input type="text" placeholder="Nhập quận,huyện" class="text-xs border border-black rounded w-[230px]">
            </div>
        </div>
        <div class="flex justify-between pt-2">
            <div>
                <input type="text" placeholder="Nhập Phường,Xã" class="text-xs border border-black rounded w-[230px]">

            </div>
            <div>
                <input type="text" placeholder="Nhập tên đường,xã" class="text-xs border border-black rounded w-[230px]">
            </div>
        </div>
        <div>
            <p> <i class="fa fa-commenting" aria-hidden="true"></i> Góp ý khách hàng :</p>
        </div>
        <div>
            <textarea class="border border-black rounded w-[500px]"></textarea>
        </div>


    </div>

    <!---->
    <div class="ml-2 w-[500px] ">
        <h1>Thông tin đơn hàng</h1>
        <div class=" flex justify-between border-b border-black    ">
            <div>
                <p>Sản phầm</p>
            </div>
            <div>
                <p>Tổng</p>
            </div>

        </div>
        <div class="   flex justify-between   ">
            <div>
                <p>Nước hoa cao cấp</p>
            </div>
            <div>
                <p class="text-red-500">150.000</p>
            </div>

        </div>
        <div class="  flex justify-between border-b border-black ">
            <div>
                <scan>Thương Hiệu :</scan>
                <scan class="text-red-500">Diro</scan>
            </div>
        </div>
        <div>
            <p>Size: M</p>
        </div>
        <div class="border-b border-black">
            <scan>Số lượng:</scan>
            <scan>1</scan>
        </div>
        <div>

            <scan>Tổng đơn hàng:</scan>
            <scan class="text-red-500">150.000</scan>
        </div>
        <div>
            <p>Chọn phương thức thanh toán</p>
            <input type="checkbox" name="ib">Thẻ Tín dụng
            <br>
            <input type="checkbox">Thanh toán tại nhà
        </div>
        <div class="pt-2">
            <button class="w-[100px]  bg-rose-400 text-base text-white rounded hover:border border-red-300"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Đặt Hàng</button>
        </div>

    </div>
</div>
</div>

<?php get_footer() ?>