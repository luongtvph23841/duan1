<?php get_header('', 'Thông tin sản phẩm') ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-b-[1px] pl-[30px] ">
    <a href="?role=client&mod=product">Sản phẩm</a> <i class="fa fa-angle-right m-[5px]"> </i><?php echo $product['name_product'] ?>
</div>

<div class="flex font-serif w-[1000px] h-full mt-[50px] mx-auto">
    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 box-image-featured">
        <img src="assets/media/products/<?php echo $product['image'] ?>" alt="" class="product-image-feature" loading="lazy" />
    </div>
    <form class="col-lg-6 col-md-6 col-sm-12 col-xs-12 information-product w-full">
        <div class="flex flex-wrap items-baseline">
            <h1 class="w-full flex-none mb-3 text-2xl leading-none text-slate-900">
                <?php echo $product['name_product'] ?>
            </h1>
            <div class="flex-auto text-lg font-medium text-slate-500">
                <?php echo $product['price'] ?> đ
            </div>
            <div class="text-xs leading-6 font-medium uppercase text-slate-500">
                In stock
            </div>
        </div>
        <div class="select-wrapper clearfix ">
            <label>Số lượng</label>
            <div class="box-quantity">
                <i class="fa fa-caret-up" onclick="plusQuantity()"></i>
                <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                <i class="fa fa-caret-down" onclick="minusQuantity()"></i>
            </div>
        </div>
        <p class="text-slate-500 mt-4 mb-6 pb-6 border-b border-slate-200">
            <?php echo $product['detail'] ?>
        </p>
        <div class="flex space-x-4 mb-5 text-sm font-medium">
            <div class="flex-auto flex space-x-4 pr-4">
                <button class="flex-none w-1/2 h-12 uppercase font-medium tracking-wider bg-slate-900 text-white" type="submit">
                    Buy now
                </button>
                <button class="flex-none w-1/2 h-12 uppercase font-medium tracking-wider border border-slate-200 text-slate-900" type="button">
                    Add to bag
                </button>
            </div>
            <button class="flex-none flex items-center justify-center w-12 h-12 text-slate-300 border border-slate-200" type="button" aria-label="Like">
                <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                </svg>
            </button>
        </div>
    </form>

</div>

<?php get_footer() ?>