<?php
function get_one_categories($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_cate FROM `categories` c WHERE c.id = $id");
    return $result;
}

function get_list_products($id)
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id ");
    return $result;
}
