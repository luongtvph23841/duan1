<?php
function get_list_comment()
{
    $result = db_fetch_array("SELECT c.id, c.content, c.time, p.name_product, u.name_user FROM `comments` c 
    INNER JOIN `products` p ON p.id = c.id_products
    INNER JOIN `users` u ON u.id = c.id_user");
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

// function create_comment($content)
// {
//     $id = db_insert('comments', [
//         'content' => $content,
//         'time' => date('Y-m-d H:i:s'),
//         'id_products' => 1,
//         'id_user' => 1,
//     ]);
//     return $id;
// }
