<?php
function get_list_categories()
{
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}

function get_one_category($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_cate FROM `categories` c WHERE c.id = $id");
    return $result;
}

function create_category($name)
{
    $user = get_auth();
    $id = db_insert('categories', [
        'name_cate' => $name,
    ]);
    return $id;
}

function update_category($id, $name)
{
    db_update('categories', [
        'name_cate' => $name,
    ], "id = $id");
    return true;
}

function delete_category($id)
{
    db_delete('categories', "id = $id");
    return true;
}
