<?php
function get_user_by_id($id)
{
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = $id ");
    return $result;
}

function get_total_cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['infor']['total'];
    }
    return FALSE;
}
