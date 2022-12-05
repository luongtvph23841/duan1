<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}

function createAction()
{
    load_view('create');
}

function indexPostAction()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';

    if (empty($name)) {
        push_notification('danger', ['Bạn phải nhập tên người dùng']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($email)) {
        push_notification('danger', ['Bạn phải nhập email']);
        header('Location: ?role=client&mod=register');
    } elseif (!preg_match($pattern, $email, $match) == 1) {
        push_notification('danger', ['Email bạn nhập chưa đúng']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($password)) {
        push_notification('danger', ['Bạn phải nhập mật khẩu']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($phone)) {
        push_notification('danger', ['Bạn phải nhập số điện thoại']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($address)) {
        push_notification('danger', ['Bạn phải nhập địa chỉ']);
        header('Location: ?role=client&mod=register');
    } else {
        create_user($name, $email, $password, $phone, $address);
        push_notification('suceess', ['Đăng kí thành công']);
        header('Location: ?role=client&mod=login');
    }
}
