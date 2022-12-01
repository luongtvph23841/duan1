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

function indexPostAction()
{
    $id_user = get_auth()['id'];
    $code = substr(md5(time()), 0, 16);
    $status = 1;

    $actived = create_orders($code, $id_user, $status);
    if ($actived) {
        foreach ($_SESSION['cart']['buy'] as $vaule) {
            $id_product = $vaule['id_product'];
            $quantity = $vaule['quantity'];

            create_order_detail($id_product, $code, $quantity);
        }

        unset($_SESSION['cart']['buy']);
        header('Location: ?role=client&mod=order&id_user=' . $id_user);
    }
}
