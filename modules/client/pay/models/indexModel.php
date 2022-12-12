<?php
function get_user_by_id($id)
{
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = $id ");
    return $result;
}

function get_total_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['infor']['total'];
    }
    return FALSE;
}

function create_orders($code, $id_user, $status, $total)
{
    $id = db_insert('orders', [
        'code' => $code,
        'id_user' => $id_user,
        'id_status' => $status,
        'time' => date('Y-m-d H:i:s'),
        'total_price' => $total,
    ]);
    return $id;
}

function create_order_detail($id_product, $code, $quantity, $price_product)
{
    $id = db_insert('order_detail', [
        'id_product' => $id_product,
        'code' => $code,
        'quantity' => $quantity,
        'price_product' => $price_product,
    ]);
    return $id;
}
