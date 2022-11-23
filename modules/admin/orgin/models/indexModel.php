<?php

function get_list_orgin()
{
    $result = db_fetch_array("SELECT * FROM `orgin`");
    return $result;
}

function get_one_orgin($id)
{
    $result = db_fetch_row("SELECT r.id, r.name_orgin FROM `orgin` r WHERE r.id = $id");
    return $result;
}

function update_orgin($id, $name)
{
    db_update('orgin', [
        'name_orgin' => $name,
    ], "id = $id");
    return true;
}

function create_orgin($name)
{
    $user = get_auth();
    $id = db_insert('orgin', [
        'name_orgin' => $name,
    ]);
    return $id;
}

function delete_orgin($id)
{
    db_delete('orgin', "id = $id");
    return true;
}
