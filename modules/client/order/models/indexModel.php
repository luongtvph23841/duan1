<?php
function get_list_orders($id)
{
    $result = db_fetch_array("SELECT o.id, o.code, o.id_user, o.time, o.id_status, s.name_status FROM `orders` o
    INNER JOIN `status` s ON s.id = o.id_status
    WHERE o.id_user = $id");
    return $result;
}
