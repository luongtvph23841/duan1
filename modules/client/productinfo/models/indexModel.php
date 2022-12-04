<?php

function get_one_product($id)
{
    $result = db_fetch_row("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, c.name_cate, o.name_orgin, p.detail  FROM `products` p 
    INNER JOIN `categories` c ON c.id = p.id_cate
    INNER JOIN `orgin` o ON o.id = p.id_orgin
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

function get_list_products_by_id_cate($id, $id_product)
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail FROM `products` p WHERE p.id_cate = $id AND p.id <> $id_product");
    return $result;
}

// function get_view_product($id)
// {
//     $result = db_fetch_array("SELECT view FROM `products` WHERE id = $id");
//     return $result;
// }

// function update_view($view, $id)
// {
//     db_update('products', [
//         'view' => $view,
//     ], "id = $id");
//     return true;
// }
