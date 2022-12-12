<?php
function get_one_order($code)
{
    $result = db_fetch_row("SELECT o.*, name_status FROM `orders` o
    INNER JOIN `status` s ON s.id = o.id_status
    WHERE code = $code");
    return $result;
}

function get_list_orderdetail($code)
{
    $result = db_fetch_array("SELECT od.id, od.id_product, od.code, od.quantity, od.price_product, o.id_status, p.name_product, p.image, s.name_status FROM `order_detail` od
    INNER JOIN `orders` o ON o.code = od.code
    INNER JOIN `products` p ON p.id = od.id_product
    INNER JOIN `status` s ON s.id = o.id_status
    WHERE od.code = $code");
    return $result;
}

function update_orders($code)
{
    db_update('orders', [
        'id_status' => 4,
    ], "code = $code");
    return true;
}
