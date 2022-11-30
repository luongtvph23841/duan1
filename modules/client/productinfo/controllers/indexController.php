<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $id = $_GET['id_prod'];

    $id_cate = $_GET['id_cate'];
    $data['product_by_id_cate'] = get_list_products_by_id_cate($id_cate);

    $data['product'] = get_one_product($id);
    $data['comment'] = get_list_comment($id);

    load_view('index', $data);
}

function indexPostAction()
{
    $id_product = $_GET['id_prod'];
    $id_cate = $_GET['id_cate'];
    $id_user = get_auth()['id'];
    $content = $_POST['content'];

    if (empty($content)) {
        push_notification('errors', [
            'name' => 'Bạn phải nhập bình luận'
        ]);
        header('Location: ?role=client&mod=productinfo&id_prod=' . $id_product . '&id_cate=' . $id_cate);
    } elseif ($id_user == '') {
        push_notification('errors', [
            'name' => 'Bạn phải đăng nhập để bình luận'
        ]);
        header('Location: ?role=client&mod=productinfo&id_prod=' . $id_product . '&id_cate=' . $id_cate);
    } else {
        create_comment($content, $id_product, $id_user);
        header('Location: ?role=client&mod=productinfo&id_prod=' . $id_product . '&id_cate=' . $id_cate);
    }
}
