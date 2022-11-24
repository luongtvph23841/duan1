<?php

function get_one_product($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_product, c.price, c.quantity, c.image, c.id_orgin, c.id_cate, c.detail  FROM `products` c WHERE c.id = $id");
    return $result;
}
