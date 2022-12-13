<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    if (get_auth()['id_role'] == 1) {
        $data['status'] = get_list_status();
        load_view('index', $data);
    } else {
        remove_auth();
        header('Location: ?role=admin&mod=auth');
    }
}

function createAction()
{
    load_view('create');
}

function createPostAction()
{
    $name = $_POST['name'];
    create_status($name);
    header('Location: ?role=admin&mod=status');
}

function updateAction()
{
    $id = $_GET['id_status'];
    $status = get_one_status($id);
    $data['status'] = $status;
    // if ($status) {
    load_view('update', $data);
    // } else {
    header('Location: ?role=admin&mod=status');
    // }
}

function updatePostAction()
{
    $id = $_GET['id_status'];
    // $status = get_one_status($id);
    $name = $_POST['name'];
    update_status($id, $name);
    push_notification('success', ['Chỉnh sửa trạng thái thành công']);
    header('Location: ?role=admin&mod=status');
}
function deleteAction()
{
    $id = $_GET['id_status'];
    delete_status($id);
    push_notification('success', ['Xoá trạng thái thành công']);
    header('Location: ?role=admin&mod=status');
}