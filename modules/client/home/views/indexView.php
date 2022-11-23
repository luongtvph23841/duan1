<?php get_header() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <div class="w-full mb-4">
        <div>
            <img src="assets/media/logos/banner-kaka.jpg" alt="" class="w-full">
        </div>
        <div class="text-center h-[100px] text-5xl pt-6 text-red-500">
            <h1 class="font-sans text-bold  ">Sản Phẩm Tiêu Biểu </h1>
        </div>
        <div class="grid grid-cols-4 gap-24 text-center bg-[url('assets/media/bg/bg-3.jpg')]">
            <?php foreach ($products as $product) : ?>
                <a href="?role=client&mod=productinfo&id_prod=<?= $product['id']; ?>">
                    <div class="border-2 border-[#EFA969] rounded-x1">
                        <img src="assets/media/products/<?php echo ($product['image']) ?>" alt="" class="mx-auto mt-3">
                    </div>
                    <div>
                        <p class="font-semibold mt-2 mb-1 p-3"><?= $product['name'] ?></p>
                    </div>
                    <div>
                        <span class="text-red-500 font-bold"><?= $product['price'] ?>đ</span>
                    </div>
                    <div class="mt3 mb-4">
                        <button class="border border-[#EFA969] rounded-x1 font-bold w-[100px] text-[18px] hover:bg-[#EFA969] hover:text-white p-1">Mua</button>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="?role=client&mod=product">
                <button class="border border-[#EFA969] font-bold w-[100px] h-[40px] text-[18px] hover:bg-[#EFA969] hover:text-white p-1 place-items-center"> Xem thêm</button>
            </a>
        </div>

    </div>
</body>

</html>

<?php get_footer() ?>