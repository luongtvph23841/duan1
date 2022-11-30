<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $id = get_auth()['id'];
    $data['users'] = get_user_by_id($id);
    $data['cart'] = $_SESSION['cart'];

    $total = get_total_cart();
    $data['total'] = $total;

    load_view('index', $data);
}
