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

    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập tên']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($email)) {
        push_notification('danger', ['Vui lòng nhập email']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($password)) {
        push_notification('danger', ['Vui lòng nhập mật khẩu']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($phone)) {
        push_notification('danger', ['Vui lòng nhập số điện thoại']);
        header('Location: ?role=client&mod=register');
    } elseif (empty($address)) {
        push_notification('danger', ['Vui lòng nhập địa chỉ']);
        header('Location: ?role=client&mod=register');
    } else {
        create_user($name, $email, $password, $phone, $address);
        push_notification('suceess', ['Đăng kí thành công']);
        header('Location: ?role=client&mod=login');
    }
}
