<?php

function construct()
{
    request_auth();
    load_model('index');
}

function indexAction()
{
    if (get_auth()['id_role'] == 1) {
        load_view('index');
    } else {
        remove_auth();
        header('Location: ?role=admin&mod=auth');
    }
}

function logoutAction()
{
    remove_auth();
    header('Location: ?role=admin&mod=auth');
}
