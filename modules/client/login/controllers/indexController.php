<?php

function construct()
{
    request_auth(true);
    load_model('index');
}

function indexAction()
{
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}

function indexPostAction()
{
    // validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: ?role=client&mod=login');
    }
    // xử lý đăng nhập
    $auth = get_login_user($username, $password);
    if ($auth) {
        push_auth($auth);
        header('Location: ?role=client');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: ?role=client&mod=login');
    }
}
