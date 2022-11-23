<?php

function get_auth_user($username, $pass)
{
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$pass' AND `id_role` = 1");
    return $result;
}
