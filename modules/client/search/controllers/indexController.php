<?php
function construct()
{
    load_model('index');
    load('helper', 'format');
}
function indexAction()
{
    $id_cate = $_GET['id_cate'];
    $data['products'] = get_list_products($id_cate);
    load_view('index', $data);
}
