<?php
function get_list_products($id)
{
    $result = db_fetch_array("SELECT c.id, c.name_product, c.price, c.quantity, c.image, c.id_orgin, c.id_cate, c.detail  FROM `products` c WHERE c.id_cate = $id
    ");
    return $result;
}
