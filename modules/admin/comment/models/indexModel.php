<?php
function get_list_comment()
{
    $result = db_fetch_array("SELECT p.id, p.content, p.time, o.name_product, c.name_user FROM `comments` p 
    INNER JOIN `products` o ON o.id = p.id_products
    INNER JOIN `users` c ON c.id = p.id_user");
    return $result;
}

function get_list_products()
{
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}

function get_list_users()
{
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

function create_comment()
{
    $id = db_insert('comments', [
        'content' => 1,
        'time' => date('Y-m-d H:i:s'),
        'id_products' => 1,
        'id_user' => 1,
    ]);
    return $id;
}
