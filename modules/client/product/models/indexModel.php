<?php

function get_list_products()
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.detail, p.id_cate, o.name_orgin, c.name_cate FROM `products` p 
    INNER JOIN `orgin` o ON o.id = p.id_orgin
    INNER JOIN `categories` c ON c.id = p.id_cate");
    return $result;
}

function get_list_products_sort($sort, $show)
{
    if ($sort == 0) {
        $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.detail, p.id_cate, o.name_orgin, c.name_cate FROM `products` p
        INNER JOIN `orgin` o ON o.id = p.id_orgin
        INNER JOIN `categories` c ON c.id = p.id_cate
        LIMIT $show");
    } elseif ($sort == 1) {
        $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.detail, p.id_cate, o.name_orgin, c.name_cate FROM `products` p
        INNER JOIN `orgin` o ON o.id = p.id_orgin
        INNER JOIN `categories` c ON c.id = p.id_cate
        ORDER BY p.name_product ASC
        LIMIT $show");
    } elseif ($sort == 2) {
        $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.detail, p.id_cate, o.name_orgin, c.name_cate FROM `products` p 
        INNER JOIN `orgin` o ON o.id = p.id_orgin
        INNER JOIN `categories` c ON c.id = p.id_cate
        ORDER BY p.name_product DESC
        LIMIT $show");
    } elseif ($sort == 3) {
        $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.detail, p.id_cate, o.name_orgin, c.name_cate FROM `products` p 
        INNER JOIN `orgin` o ON o.id = p.id_orgin
        INNER JOIN `categories` c ON c.id = p.id_cate
        ORDER BY p.price ASC
        LIMIT $show");
    } elseif ($sort == 4) {
        $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.detail, p.id_cate, o.name_orgin, c.name_cate FROM `products` p 
        INNER JOIN `orgin` o ON o.id = p.id_orgin
        INNER JOIN `categories` c ON c.id = p.id_cate
        ORDER BY p.price DESC
        LIMIT $show");
    }
    return $result;
}
