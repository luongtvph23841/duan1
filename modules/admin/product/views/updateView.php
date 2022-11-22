<?php get_header('', 'Chỉnh sửa sản phẩm') ?>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa sản phẩm</h5>
            <!--end::Page Title-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Form chỉnh sửa thông tin sản phẩm</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="id" class="form-control" readonly="true" value="<?php echo $product['id'] ?>" />
                            </div>
                            <div class="form-group mb-1">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $product['name'] ?>"></input>
                            </div>
                            <div class="form-group mb-1">
                                <label>Chi tiết sản phẩm</label>
                                <input type="text" name="detail" class="form-control" value="<?php echo $product['detail'] ?>"></input>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Số lượng trong kho</label>
                                <input type="number" name="quantity" class="form-control" value="<?php echo $product['quantity'] ?>" />
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Giá cho mỗi sản phẩm</label>
                                <div class="input-group">
                                    <input type="text" name="price" class="form-control" value="<?php echo $product['price'] ?>" aria-describedby="basic-addon2" />
                                    <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control select2" name="id_cate">
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Xuất sứ</label>
                                <select class="form-control select2" name="id_orgin">
                                    <?php foreach ($orgin as $key) : ?>
                                        <option value="<?php echo $key['id'] ?>"><?php echo $key['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col col-9">
                            <div><label>Hình ảnh sản phẩm</label></div>
                            <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_3">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Kéo thả hình ảnh cần upload</h3>
                                    <span class="dropzone-msg-desc">Chỉ chấp nhận tải lên file hình ảnh</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Sửa</button>
                    <button type="reset" class="btn btn-secondary">Làm lại</button>
                    <a href="?role=admin&mod=product" class="btn btn-default">Quay về</a>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
<?php get_footer() ?>