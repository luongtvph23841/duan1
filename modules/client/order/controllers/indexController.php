<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $id_user = $_GET['id_user'];
    $data['orders'] = get_list_orders($id_user);

    load_view('index', $data);
}
