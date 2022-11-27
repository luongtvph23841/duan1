<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    load_view('index');
}

function createAction()
{
    load_view('create');
}

function indexPostAction()
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    create_user($name, $email, $password, $phone, $address);
    header('Location: ?role=client&mod=login');
}
