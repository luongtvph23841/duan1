<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $code = $_GET['code'];

    $data['orders'] = get_one_order($code);
    $data['orderdetail'] = get_list_orderdetail($code);

    load_view('index', $data);
}

function cancelAction()
{
    $code = $_GET['code'];;
    $id_user = get_auth()['id'];
    update_orders($code);
    header('Location: ?role=client&mod=order&id_user=' . $id_user);
}
