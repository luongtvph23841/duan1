<?php

function get_list_products()
{
    $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p 
    INNER JOIN `orgin` o ON o.id = p.id_orgin
    INNER JOIN `categories` c ON c.id = p.id_cate");
    return $result;
}

function get_list_products_sort($sort)
{
    if ($sort == 0) {
        $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p
            INNER JOIN `orgin` o ON o.id = p.id_orgin
            INNER JOIN `categories` c ON c.id = p.id_cate");
    } elseif ($sort == 1) {
        $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p
            INNER JOIN `orgin` o ON o.id = p.id_orgin
            INNER JOIN `categories` c ON c.id = p.id_cate
            ORDER BY p.name_product ASC");
    } elseif ($sort == 2) {
        $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p 
            INNER JOIN `orgin` o ON o.id = p.id_orgin
            INNER JOIN `categories` c ON c.id = p.id_cate
            ORDER BY p.name_product DESC");
    } elseif ($sort == 3) {
        $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p 
            INNER JOIN `orgin` o ON o.id = p.id_orgin
            INNER JOIN `categories` c ON c.id = p.id_cate
            ORDER BY p.price ASC");
    } elseif ($sort == 4) {
        $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p 
            INNER JOIN `orgin` o ON o.id = p.id_orgin
            INNER JOIN `categories` c ON c.id = p.id_cate
            ORDER BY p.price DESC");
    }

    return $result;
}
