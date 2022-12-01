<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $code = $_GET['code'];
    $data['orderdetail'] = get_list_orderdetail($code);

    load_view('index', $data);
}
