<?php
function get_list_products() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}

function get_one_product($id) {
    $result = db_fetch_row("SELECT * FROM `products` WHERE c.id = $id");
    return $result;
}

function create_product($name, $description) {
    $user = get_auth();
    $id = db_insert('products', [
        'name' => $name,
        'description' => $description,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_product($id, $name, $description) {
    db_update('products', [
        'name' => $name,
        'description' => $description
    ], "id = $id");
    return true;
}

function delete_product($id) {
    db_delete('products', "id = $id");
    return true;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}