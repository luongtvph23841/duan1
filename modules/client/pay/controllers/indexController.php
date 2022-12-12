<?php

function construct()
{
    if (!empty(get_auth())) {
        load_model('index');
        load('helper', 'format');
    } else {
        $_SESSION['pay'] = 1;
        header('Location: ?role=client&mod=login');
    }
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

function indexPostAction()
{
    $id_user = get_auth()['id'];
    $code = mt_rand();
    $status = 1;
    $total = $_SESSION['cart']['infor']['total'];

    $actived = create_orders($code, $id_user, $status, $total);
    if ($actived) {
        foreach ($_SESSION['cart']['buy'] as $vaule) {
            $id_product = $vaule['id_product'];
            $quantity = $vaule['quantity'];
            $price_product = $vaule['price'];

            create_order_detail($id_product, $code, $quantity, $price_product);
        }

        unset($_SESSION['cart']['buy']);
        header('Location: ?role=client&mod=order&id_user=' . $id_user);
    }
}
