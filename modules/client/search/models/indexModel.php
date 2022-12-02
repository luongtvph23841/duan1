<?php
function get_one_categories($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_cate FROM `categories` c WHERE c.id = $id");
    return $result;
}

function get_one_orgin($id)
{
    $result = db_fetch_row("SELECT c.id, c.name_orgin FROM `orgin` c WHERE c.id = $id");
    return $result;
}

function get_product_by_keyword($keyword)
{
    $result = db_fetch_array("SELECT * FROM `products` WHERE `name_product` LIKE '%$keyword%'");
    return $result;
}

function get_list_products_by_id_cate($id)
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id");
    return $result;
}

function get_list_products_by_id_orgin($id)
{
    $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id");
    return $result;
}

function get_list_products_by_id_cate_sort($id, $sort, $show)
{
    if ($show == 0) {
        if ($sort == 0) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id");
        } elseif ($sort == 1) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.name_product ASC");
        } elseif ($sort == 2) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.name_product DESC");
        } elseif ($sort == 3) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.price ASC");
        } elseif ($sort == 4) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.price DESC");
        }
    } else {
        if ($sort == 0) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            LIMIT $show");
        } elseif ($sort == 1) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.name_product ASC
            LIMIT $show");
        } elseif ($sort == 2) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.name_product DESC
            LIMIT $show");
        } elseif ($sort == 3) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.price ASC
            LIMIT $show");
        } elseif ($sort == 4) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_cate = $id 
            ORDER BY p.price DESC
            LIMIT $show");
        }
    }
    return $result;
}

function get_list_products_by_id_orgin_sort($id, $sort, $show)
{
    if ($show == 0) {
        if ($sort == 0) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id");
        } elseif ($sort == 1) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
            ORDER BY p.name_product ASC");
        } elseif ($sort == 2) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
            ORDER BY p.name_product DESC");
        } elseif ($sort == 3) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
            ORDER BY p.price ASC");
        } elseif ($sort == 4) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
            ORDER BY p.price DESC");
        }
    } else {
        if ($sort == 0) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
            LIMIT $show");
        } elseif ($sort == 1) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
                ORDER BY p.name_product ASC
            LIMIT $show");
        } elseif ($sort == 2) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
           ORDER BY p.name_product DESC
           LIMIT $show");
        } elseif ($sort == 3) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
          ORDER BY p.price ASC
          LIMIT $show");
        } elseif ($sort == 4) {
            $result = db_fetch_array("SELECT p.id, p.name_product, p.price, p.quantity, p.image, p.id_orgin, p.id_cate, p.detail  FROM `products` p WHERE p.id_orgin = $id 
         ORDER BY p.price DESC
         LIMIT $show");
        }
    }

    return $result;
}
