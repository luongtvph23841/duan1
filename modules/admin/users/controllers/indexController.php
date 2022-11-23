<?php

function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    $data['users'] = get_list_users();
    load_view('index', $data);
}

function createAction()
{
    $data['role'] = get_list_role();
    load_view('create',  $data);
}

function createPostAction()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id_role = $_POST['id_role'];


    create_user($name, $email, $password, $phone, $address, $id_role);
    push_notification('success', ['Thêm mới người dùng thành công']);
    header('Location: ?role=admin&mod=users');
}

function deleteAction()
{
    $id = $_GET['id_user'];
    delete_user($id);
    push_notification('success', ['Xoá người dùng thành công']);
    header('Location: ?role=admin&mod=users');
}

function updateAction()
{
    $id = $_GET['id_user'];
    $data['role'] = get_list_role();
    $id_user = get_one_user($id);
    $data['user'] = $id_user;
    if ($id_user) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=users');
    }
}

function updatePostAction()
{
    $id = $_GET['id_user'];
    $id_user = get_one_user($id);
    if (!$id_user) {
        header('Location: ?role=admin&mod=users');
        die();
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id_role = $_POST['id_role'];

    update_user($id, $name, $email, $password, $phone, $address, $id_role);
    push_notification('success', ['Chỉnh sửa người dùng thành công']);
    header('Location: ?role=admin&mod=users');
}
