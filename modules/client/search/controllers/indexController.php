<?php
function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    if (isset($_GET['id_cate'])) {
        $id_cate = $_GET['id_cate'];
        $data['products'] = get_list_products_by_id_cate($id_cate);
        $data['category'] = get_one_categories($id_cate);
    }
    if (isset($_GET['id_orgin'])) {
        $id_orgin = $_GET['id_orgin'];
        $data['products'] = get_list_products_by_id_orgin($id_orgin);
        $data['orgin'] = get_one_orgin($id_orgin);
    }
    load_view('index', $data);
}

function indexPostAction()
{

    $sort = $_POST['sort'];
    $show = $_POST['show'];

    if (isset($_GET['id_cate'])) {
        $id_cate = $_GET['id_cate'];
        $data['products'] = get_list_products_by_id_cate_sort($id_cate, $sort, $show);
        $data['category'] = get_one_categories($id_cate);
    }
    if (isset($_GET['id_orgin'])) {
        $id_orgin = $_GET['id_orgin'];
        $data['products'] = get_list_products_by_id_orgin_sort($id_orgin, $sort, $show);
        $data['orgin'] = get_one_orgin($id_orgin);
    }

    load_view('index', $data);
}
