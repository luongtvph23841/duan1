<?php
function get_user_by_id($id)
{
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = $id ");
    return $result;
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
