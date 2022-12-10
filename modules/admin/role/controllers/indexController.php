<?php
function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    $data['role'] = get_list_role();
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
        push_notification('danger', ['Vui lòng nhập vào tên vai trò']);
        header('Location: ?role=admin&mod=role&action=create');
        die();
    }
    create_role($name);
    push_notification('success', ['Tạo mới vai trò thành công']);
    header('Location: ?role=admin&mod=role');
}

function deleteAction()
{
    $id = $_GET['id_role'];
    delete_role($id);
    push_notification('success', ['Xoá nvai trò thành công']);
    header('Location: ?role=admin&mod=role');
}

function updateAction()
{
    $id = $_GET['id_role'];
    $role = get_one_role($id);
    $data['role'] = $role;
    // if ($role) {
    load_view('update', $data);
    // } else {
    header('Location: ?role=admin&mod=role');
    // }
}

function updatePostAction()
{
    $id = $_GET['id_role'];
    // $role = get_one_role($id);
    // if (!$role) {
    // header('Location: ?role=admin&mod=role');
    //     die();
    // }
    $name = $_POST['name'];
    // if (empty($name)) {
    //     push_notification('errors', [
    //         'name' => 'Vui lòng nhập vào tên danh mục'
    //     ]);
    //     header('Location: ?role=admin&mod=role&action=update&id_role=' . $id);
    // }
    update_role($id, $name);
    push_notification('success', ['Chỉnh sửa vai trò thành công']);
    header('Location: ?role=admin&mod=role');
}
