<?php

function get_list_users()
{
    $result = db_fetch_array("SELECT u.id, u.name_user, u.email, u.password, u.phone, u.address, r.name_role, u.image FROM `users` u
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
    $result = db_fetch_row("SELECT u.id, u.name_user, u.email, u.password, u.phone, u.address, u.id_role, u.image  FROM `users` u WHERE u.id = $id");
    return $result;
}

function create_user($name, $email, $password, $phone, $address, $id_role, $img)
{
    $user = get_auth();
    $id = db_insert('users', [
        'name_user' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'address' => $address,
        'id_role' => $id_role,
        'image' => $img,
    ]);
    return $id;
}

function update_user($id, $name, $email, $password, $phone, $address, $id_role, $img)
{
    db_update('users', [
        'name_user' => $name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'address' => $address,
        'id_role' => $id_role,
        'image' => $img,
    ], "id = $id");
    return true;
}

function delete_user($id)
{
    db_delete('users', "id = $id");
    return true;
}
