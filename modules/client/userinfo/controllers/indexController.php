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

    update_user($id, $name, $email, $password, $phone, $address, $id_role, $img);
    push_notification('success', ['Chỉnh sửa người dùng thành công']);
    header('Location: ?role=client&mod=userinfo&id_user=' . $id);
}
