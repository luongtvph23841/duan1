<?php

function get_one_product($id)
{
    $result = db_fetch_row("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, c.name_cate, p.detail  FROM `products` p 
    INNER JOIN `categories` c ON c.id = p.id_cate
    WHERE p.id = $id");
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

function create_comment($content, $id_product, $id_user)
{
    $id = db_insert('comments', [
        'content' => $content,
        'time' => date('Y-m-d H:i:s'),
        'id_products' => $id_product,
        'id_user' => $id_user,
    ]);
    return $id;
}
