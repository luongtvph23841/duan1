<?php
function construct(){
    load_model('index');//kiếm tra xem có file index trong mode hay ko.
    load('helper', 'format');

    
}
function indexAction(){
    $id_cate = $_GET['id_cate'];
    $data['categories']=get_list_categories_by_id( $id_cate);
    load_view('index',$data);//kiểm tra ;
}
