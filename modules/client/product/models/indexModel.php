<?php

function get_list_products()
{
    $result = db_fetch_array("SELECT p.id, p.name, p.price, p.quantity, p.image, p.detail, o.name_orgin, c.name_cate FROM `products` p 
    INNER JOIN `orgin` o ON o.id = p.id_orgin
    INNER JOIN `categories` c ON c.id = p.id_cate");
    return $result;
}
