<?php

function create_user($name, $email, $password, $phone, $address)
{
    $id = db_insert('users', [
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'address' => $address,
        'id_role' => 2,
        'name_user' => $name,
    ]);
    return $id;
}
