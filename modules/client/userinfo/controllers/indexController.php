<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = $_GET['id_user'];
    $data['users'] = get_user_by_id($id);
    load_view('index', $data);
}

function indexPostAction()
{
    $id = $_GET['id_user'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id_role = get_auth()['id_role'];

    $file = $_FILES['img'];
    move_uploaded_file($file['tmp_name'], 'assets/media/users/' . $file['name']);

    $img = $file['name'];

    if (empty($name)) {
        push_notification('danger', ['Bạn phải nhập tên người dùng']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    } elseif (empty($email)) {
        push_notification('danger', ['Bạn phải nhập email']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    } elseif (empty($password)) {
        push_notification('danger', ['Bạn phải nhập mật khẩu']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    } elseif (empty($phone)) {
        push_notification('danger', ['Bạn phải nhập số điện thoại']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    } elseif (empty($address)) {
        push_notification('danger', ['Bạn phải nhập địa chỉ']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    } elseif (empty($img)) {
        push_notification('danger', ['Bạn phải chọn hình ảnh']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    } else {
        update_user($id, $name, $email, $password, $phone, $address, $id_role, $img);
        push_notification('suceess', ['Chỉnh sửa thông tin thành công']);
        header('Location: ?role=client&mod=userinfo&id_user=' . $id);
    }
}
