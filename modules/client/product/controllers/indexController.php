<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $data['products'] = get_list_products();
    load_view('index', $data);
}

function indexPostAction()
{
    $sort = $_POST['sort'];
    $show = $_POST['show'];

    $data['products'] = get_list_products_sort($sort, $show);
    load_view('index', $data);
}
