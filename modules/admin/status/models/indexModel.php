<?php
function get_list_status()
{
    $result = db_fetch_array("SELECT * FROM `status`");
    return $result;
}
function get_one_status($id)
{
    $result = db_fetch_row("SELECT r.id, r.name_status FROM `status` r WHERE r.id = $id");
    return $result;
}

function create_status($name)
{
    $id = db_insert('status', [
        'name_status' => $name,
    ]);
    return $id;
}
function update_status($id, $name)
{
    db_update('status', [
        'name_status' => $name,
    ], "id = $id");
    return true;
}
function delete_status($id)
{
    db_delete('status', "id = $id");
    return true;
}
