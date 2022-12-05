<?php
function get_list_products()
{
    $result = db_fetch_array("SELECT p.*, o.name_orgin, c.name_cate FROM `products` p 
    INNER JOIN `orgin` o ON o.id = p.id_orgin
    INNER JOIN `categories` c ON c.id = p.id_cate");
    return $result;
}

function get_list_categories()
{
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}

function get_list_orgin()
{
    $result = db_fetch_array("SELECT * FROM `orgin`");
    return $result;
}

function get_one_product($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_product, c.price, c.quantity, c.image, c.id_orgin, c.id_cate, c.detail  FROM `products` c WHERE c.id = $id");
    return $result;
}

function create_product($name, $price, $quantity, $img, $id_orgin, $id_cate, $detail)
{
    $user = get_auth();
    $id = db_insert('products', [
        'name_product' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'image' => $img,
        'id_orgin' => $id_orgin,
        'id_cate' => $id_cate,
        'detail' => $detail,
    ]);
    return $id;
}

function update_product($id, $name, $price, $quantity, $img, $id_orgin, $id_cate, $detail)
{
    db_update('products', [
        'name_product' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'image' => $img,
        'id_orgin' => $id_orgin,
        'id_cate' => $id_cate,
        'detail' => $detail,
    ], "id = $id");
    return true;
}

function delete_product($id)
{
    db_delete('products', "id = $id");
    return true;
}
