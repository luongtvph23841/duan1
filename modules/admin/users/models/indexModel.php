<?php

function get_list_users()
{
    $result = db_fetch_array("SELECT u.id, u.name_user, u.email, u.password, u.phone, u.address, r.name_role FROM `users` u
    INNER JOIN `role` r ON r.id = u.id_role");
    return $result;
}

function get_list_role()
{
    $result = db_fetch_array("SELECT * FROM `role`");
    return $result;
}

function get_one_user($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_user, c.email, c.password, c.phone, c.address, c.id_role  FROM `users` c WHERE c.id = $id");
    return $result;
}

function create_user($name, $email, $password, $phone, $address, $id_role)
{
    $user = get_auth();
    $id = db_insert('users', [
        'name_user' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'address' => $address,
        'id_role' => $id_role,
    ]);
    return $id;
}

function update_user($id, $name, $email, $password, $phone, $address, $id_role)
{
    db_update('users', [
        'name_user' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'address' => $address,
        'id_role' => $id_role,
    ], "id = $id");
    return true;
}

function delete_user($id)
{
    db_delete('users', "id = $id");
    return true;
}
