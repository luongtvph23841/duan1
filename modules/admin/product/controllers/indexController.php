<?php

function construct()
{
    request_auth();
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $data['products'] = get_list_products();
    $data['categories'] = get_list_categories();
    $data['orgin'] = get_list_orgin();
    load_view('index', $data);
}

function createAction()
{
    $data['categories'] = get_list_categories();
    $data['orgin'] = get_list_orgin();
    load_view('create', $data);
}

function createPostAction()
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id_orgin = $_POST['id_orgin'];
    $id_cate = $_POST['id_cate'];
    $detail = $_POST['detail'];

    $file = $_FILES['img'];
    move_uploaded_file($file['tmp_name'], 'assets/media/products/' . $file['name']);

    $img = $file['name'];

    create_product($name, $price, $quantity, $img, $id_orgin, $id_cate, $detail);
    push_notification('success', ['Thêm mới sản phẩm thành công']);
    header('Location: ?role=admin&mod=product');
}

function deleteAction()
{
    $id = $_GET['id_prod'];
    delete_product($id);
    push_notification('success', ['Xoá sản phẩm thành công']);
    header('Location: ?role=admin&mod=product');
}

function updateAction()
{
    $id = $_GET['id_prod'];
    $prod = get_one_product($id);
    $data['product'] = $prod;
    $data['categories'] = get_list_categories();
    $data['orgin'] = get_list_orgin();
    // if ($prod) {
    load_view('update', $data);
    // } else {
    header('Location: ?role=admin&mod=product');
    // }
}

function updatePostAction()
{
    $id = $_GET['id_prod'];
    $prod = get_one_product($id);
    // if (!$prod) {
    //     header('Location: ?role=admin&mod=product');
    //     die();
    // }
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $id_orgin = $_POST['id_orgin'];
    $id_cate = $_POST['id_cate'];
    $detail = $_POST['detail'];

    $file = $_FILES['img'];
    move_uploaded_file($file['tmp_name'], 'assets/media/products/' . $file['name']);

    $img = $file['name'];

    update_product($id, $name, $price, $quantity, $img, $id_orgin, $id_cate, $detail);
    push_notification('success', ['Chỉnh sửa sản phẩm thành công']);
    header('Location: ?role=admin&mod=product');
}
