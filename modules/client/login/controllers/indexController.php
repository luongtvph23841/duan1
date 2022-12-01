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

function indexPostAction()
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $auth = get_login_user($username, $password);

    if (empty($username)) {
        push_notification('danger', ['Bạn phải nhập tài khoản']);
        header('Location: ?role=client&mod=login');
    } elseif (empty($password)) {
        push_notification('danger', ['Bạn phải nhập mật khẩu']);
        header('Location: ?role=client&mod=login');
    } elseif (empty($auth)) {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: ?role=client&mod=login');
    } else {
        push_auth($auth);
        header('Location: ?role=client');
    }
}
