<?php

function get_list_role()
{
    $result = db_fetch_array("SELECT * FROM `role`");
    return $result;
}

function get_one_role($id)
{
    $result = db_fetch_row("SELECT r.id, r.name_role FROM `role` r WHERE r.id = $id");
    return $result;
}

function update_role($id, $name)
{
    db_update('role', [
        'name_role' => $name,
    ], "id = $id");
    return true;
}

function create_role($name)
{
    $user = get_auth();
    $id = db_insert('role', [
        'name_role' => $name,
    ]);
    return $id;
}

function delete_role($id)
{
    db_delete('role', "id = $id");
    return true;
}
