<?php

function get_one_product($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_product, c.price, c.quantity, c.image, c.id_orgin, c.id_cate, c.detail  FROM `products` c WHERE c.id = $id");
    return $result;
}

function get_list_comment($id)
{
    $result = db_fetch_array("SELECT c.id, c.content, c.time, p.name_product, u.name_user, u.image FROM `comments` c 
    INNER JOIN `products` p ON p.id = c.id_products
    INNER JOIN `users` u ON u.id = c.id_user
    WHERE p.id = $id");
    return $result;
}
