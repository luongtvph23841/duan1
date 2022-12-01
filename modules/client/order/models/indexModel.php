<?php

function get_list_orderdetail($id)
{
    $result = db_fetch_array("SELECT od.id, od.id_product, od.code, od.quantity, p.name_product, p.price, p.image FROM `order_detail` od
    INNER JOIN `products` p ON p.id = od.id_product
    INNER JOIN `orders` o ON o.code = od.code
    WHERE `id_user` = $id ");
    return $result;
}
