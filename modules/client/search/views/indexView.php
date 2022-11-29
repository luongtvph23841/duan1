<?php
get_header('', 'tìm kiếm')
?>
<div>
    <div class=" w-full m-auto ml-2">
        <scan> <i class="fa fa-lightbulb-o hover:text-yellow-500 text-xl" aria-hidden="true" class="hover:bg-yellow-400 "></i> Kết quả tìm kiếm cho từ khóa :</scan>
        <scan class="text-rose-500">Son môi</scan>
    </div>
    <div class="h-[60px] flex bg-gray-200 ">
        <div class="w-full pt-4 ml-2 ">
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Sắp xếp theo</button>
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Liên quan</button>
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Mới nhất</button>
            <button class="w-[100px] h-[40px]  border-none hover:bg-orange-400 hover:rounded mr-2 hover:text-white font-sans">Bán chạy</button>
            <select class="hover:bg-neutral-500 hover:text-white rounded h-[30px] w-[100px]" >
                <option selected >Giá</option>
                <option value="1">150.000</option>
                <option value="2">250.000</option>
                <option value="3">350.000</option>
            </select>
        </div>
        <div></div>
    </div>

    <div class="pt-2 grid grid-cols-4 ml-12 mb-4">
        <div class=" w-[300px] h-[400px]  rounded-xl  bg-zinc-100 ">
            <img src="" alt="" class="w-full h-[300px] mx-auto">
            <p></p>
            <h3 class="text-center">150.000</h3>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan>Đã bán 4,5k</scan><br>
            <button class="w-[100px] h-[30px] bg-yellow-200 ml-4 rounded">Hà Nội</button>
        </div>
        <div class=" w-[300px] h-[400px] rounded-xl  bg-zinc-100   ">
            <img src="" alt="" class="w-full h-[300px] mx-auto">
            <p></p>
            <h3 class="text-center ">150.000</h3>
            <div class="pl-4">
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan>Đã bán 4,5k</scan><br>
            </div>
            <button class="w-[100px] h-[30px] bg-yellow-200 ml-4 rounded">Hà Nội</button>
        </div>
        <div class=" w-[300px] h-[400px] rounded-xl  bg-zinc-100  ">
            <img src="" alt="" class="w-full h-[300px] mx-auto">
            <p></p>
            <h3 class="text-center">150.000</h3>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan>Đã bán 4,5k</scan><br>
            <button class="w-[100px] h-[30px] bg-yellow-200 ml-4 rounded">Hà Nội</button>
        </div>
        <div class=" w-[300px] h-[400px] rounded-xl  bg-zinc-100  ">
            <img src="" alt="" class="w-full h-[300px] mx-auto">
            <p></p>
            <h3 class="text-center">150.000</h3>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan><i class="fa fa-star text-yellow-400" aria-hidden="true"></i></scan>
            <scan>Đã bán 4,5k</scan><br>
            <button class="w-[100px] h-[30px] bg-yellow-200 ml-4 rounded">Hà Nội</button>
        </div>
    </div>
    

</div>
<?php
get_footer()
?>