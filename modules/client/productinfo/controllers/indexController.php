<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = $_GET['id_prod'];
    $data['product'] = get_one_product($id);
    $data['comment'] = get_list_comment($id);

    load_view('index', $data);
}
