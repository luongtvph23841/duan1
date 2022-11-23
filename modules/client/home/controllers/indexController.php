<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $data['products'] = get_list_products();
    load_view('index', $data);
}
