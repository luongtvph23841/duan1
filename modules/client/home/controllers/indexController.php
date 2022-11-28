<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    $data['products'] = get_list_products();
    load_view('index', $data);
}


function logoutAction()
{
    request_auth(true);
    remove_auth();
    header('Location: ?role=client');
}
