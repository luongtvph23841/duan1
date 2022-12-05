<?php
function get_list_orders()
{
    $result = db_fetch_array(" SELECT o.*, name_status, name_user FROM `orders` o 
    INNER JOIN `status` s ON s.id = o.id_status
    INNER JOIN `users` u ON u.id = o.id_user");

    return $result;

}