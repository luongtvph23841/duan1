<?php get_header('', 'Tạo mới sản phẩm') ?>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Thêm mới sản phẩm</h5>
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
                <h3 class="card-title">Form thông tin sản phẩm mới</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập vào tiêu đề sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <div class="input-group">
                                    <input type="text" name="price" class="form-control" placeholder="Giá cho mỗi sản phẩm" aria-describedby="basic-addon2" />
                                    <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Số lượng trong kho</label>
                                <input type="number" name="quantity" class="form-control" placeholder="Nhập vào số lượng" />
                            </div>
                            <div class="form-group">
                                <label>Xuất sứ</label>
                                <select class="form-control select2" name="id_orgin">
                                    <?php foreach ($orgin as $key) : ?>
                                        <option value="<?php echo $key['id'] ?>"><?php echo $key['name_orgin'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control select2" name="id_cate">
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name_cate'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group mb-1">
                                <label>Chi tiết sản phẩm</label>
                                <textarea name="detail" id="kt-ckeditor-1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh sản phẩm</label>
                            <input type="file" name="img" id="img" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Thêm</button>
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