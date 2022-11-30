<?php
function get_one_categories($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_cate FROM `categories` c WHERE c.id = $id");
    return $result;
}

function get_one_orgin($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_orgin FROM `orgin` c WHERE c.id = $id");
    return $result;
}

function get_one_product_by_name($name)
{
    $result = db_fetch_row("SELECT * FROM `producs` c WHERE `name_product` LIKE '%$name%' ");
    return $result;
}

function get_list_products_by_id_cate($id)
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id ");
    return $result;
}

function get_list_products_by_id_orgin($id)
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id ");
    return $result;
}
