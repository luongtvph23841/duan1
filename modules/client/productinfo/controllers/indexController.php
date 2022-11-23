<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = $_GET['id_prod'];
    $prod = get_one_product($id);
    $data['product'] = $prod;
    load_view('index', $data);
}
