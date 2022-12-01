<?php
function get_list_orders($id)
{
    $result = db_fetch_array("SELECT o.id, o.code, od.code, o.id_user, o.id_status, od.id_product, od.quantity, p.name_product, p.image, p.price  FROM `orders` o
    INNER JOIN `status` s ON s.id = o.id_status
    INNER JOIN `order_detail` od ON od.code = o.code
    INNER JOIN `products` p ON p.id = od.id_product
    WHERE o.id_user = $id ");
    return $result;
}
