<?php get_header('', 'Tạo mới người dùng') ?>

<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Sửa thông tin người dùng</h5>
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
                <h3 class="card-title">Form sửa thông tin người dùng</h3>
            </div>
            <!--begin::Form-->
            <form method="POST" action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="id" class="form-control" value="<?php echo $user['id'] ?>" readonly="true" />
                            </div>
                            <div class=" form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $user['name'] ?>" />
                            </div>
                            <div class=" form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>" />
                            </div>
                            <div class=" form-group">
                                <label>Mật khẩu</label>
                                <input type="text" name="password" class="form-control" value="<?php echo $user['password'] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" value="<?php echo $user['phone'] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="address" class="form-control" value="<?php echo $user['address'] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Vai trò</label>
                                <select class="form-control select2" name="id_role">
                                    <?php foreach ($role as $key) : ?>
                                        <option value="<?php echo $key['id'] ?>"><?php echo $key['name_role'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Sửa</button>
                    <button type="reset" class="btn btn-secondary">Làm lại</button>
                    <a href="?role=admin&mod=users" class="btn btn-default">Quay về</a>
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