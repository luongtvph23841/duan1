<?php

function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    $data['comments'] = get_list_comment();
    $data['products'] = get_list_products();
    load_view('index', $data);
}

// function createAction()
// {
//     $data['products'] = get_list_products();
//     $data['users'] = get_list_users();
//     load_view('create');
// }

// function createPostAction()
// {
//     $content = $_POST['content'];

//     create_comment($content);
//     push_notification('success', ['Thêm mới sản phẩm thành công']);
//     header('Location: ?role=admin&mod=comment');
// }

// function deleteAction()
// {
//     $id = $_GET['id_prod'];
//     delete_product($id);
//     push_notification('success', ['Xoá danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=product');
// }

// function updateAction()
// {
//     $id = $_GET['id_prod'];
//     $prod = get_one_product($id);
//     $data['product'] = $prod;
//     $data['categories'] = get_list_categories();
//     $data['orgin'] = get_list_orgin();
//     if ($prod) {
//         load_view('update', $data);
//     } else {
//         header('Location: ?role=admin&mod=product');
//     }
// }

// function updatePostAction()
// {
//     $id = $_GET['id_prod'];
//     $prod = get_one_product($id);
//     if (!$prod) {
//         header('Location: ?role=admin&mod=product');
//         die();
//     }
//     $name = $_POST['name'];
//     $price = $_POST['price'];
//     $quantity = $_POST['quantity'];
//     $img = $_POST['img'];
//     $id_orgin = $_POST['id_orgin'];
//     $id_cate = $_POST['id_cate'];
//     $detail = $_POST['detail'];
//     if (empty($name)) {
//         push_notification('errors', [
//             'name' => 'Vui lòng nhập vào tên danh mục'
//         ]);
//         header('Location: ?role=admin&mod=product&action=update&id_prod=' . $id);
//     }
//     update_product($id, $name, $price, $quantity, $img, $id_orgin, $id_cate, $detail);
//     push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=product');
// }
