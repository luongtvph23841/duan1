<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = get_auth()['id'];
    $data['users'] = get_user_by_id($id);
    load_view('index', $data);
}
