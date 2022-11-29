<?php
function get_list_categories_by_id($id){
    $result=db_fetch_array("SELECT c.id, c.name_product, c.price, c.quantity, c.image, c.id_orgin, c.id_cate, c.detail  FROM `products` c WHERE c.id = $id
    ");
    return $result;//trả lại

}
?>