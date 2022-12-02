<?php
function get_list_orderdetail($code)
{
    $result = db_fetch_array("SELECT od.id, od.id_product, od.code, od.quantity, o.id_status, p.name_product, p.image, p.price, s.name_status FROM `order_detail` od
    INNER JOIN `orders` o ON o.code = od.code
    INNER JOIN `products` p ON p.id = od.id_product
    INNER JOIN `status` s ON s.id = o.id_status
    WHERE od.code = $code");
    return $result;
}
