<?php
function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    $data['orgin'] = get_list_orgin();
    load_view('index', $data);
}

function createAction()
{
    load_view('create');
}

function createPostAction()
{
    $name = $_POST['name'];
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên xuất sứ']);
        header('Location: ?role=admin&mod=orgin&action=create');
        // die();
    }
    create_orgin($name);
    push_notification('success', ['Tạo mới xuất sứ thành công']);
    header('Location: ?role=admin&mod=orgin');
}

function deleteAction()
{
    $id = $_GET['id_orgin'];
    delete_orgin($id);
    push_notification('success', ['Xoá xuất sứ thành công']);
    header('Location: ?role=admin&mod=orgin');
}

function updateAction()
{
    $id = $_GET['id_orgin'];
    $orgin = get_one_orgin($id);
    $data['orgin'] = $orgin;
    // if ($orgin) {
    load_view('update', $data);
    // } else {
    // header('Location: ?role=admin&mod=orgin');
    // }
}

function updatePostAction()
{
    $id = $_GET['id_orgin'];
    // $orgin = get_one_orgin($id);
    // if (!$orgin) {
    //     header('Location: ?role=admin&mod=orgin');
    //     // die();
    // }
    $name = $_POST['name'];
    // if (empty($name)) {
    //     push_notification('errors', [
    //         'name' => 'Vui lòng nhập vào tên xuất sứ'
    //     ]);
    //     header('Location: ?role=admin&mod=orgin&action=update&id_orgin=' . $id);
    // }
    update_orgin($id, $name);
    push_notification('success', ['Chỉnh sửa xuất sứ thành công']);
    header('Location: ?role=admin&mod=orgin');
}
