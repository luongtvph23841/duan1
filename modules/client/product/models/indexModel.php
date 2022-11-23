<?php

function get_list_products()
{
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}
