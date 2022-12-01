<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $id_user = $_GET['id_user'];
    $data['orderdetail'] = get_list_orderdetail($id_user);
    load_view('index', $data);
}
