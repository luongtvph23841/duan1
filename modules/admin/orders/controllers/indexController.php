<?php
function construct()
{
    load('helper', 'format');
    load_model('index');
}

function indexAction()
{
    $data['orders'] = get_list_orders();
    load_view('index', $data);
}

function updateAction()
{
    $status = get_list_status();
    $data['status'] = $status;
    load_view('update', $data);
}

function updatePostAction()
{
    $id_order = $_GET['id_order'];
    $id_status = $_POST['id_status'];
    update_order($id_order, $id_status);
    push_notification('success', ['Chỉnh sửa đơn hàng thành công']);
    header('Location: ?role=admin&mod=orders');
}
