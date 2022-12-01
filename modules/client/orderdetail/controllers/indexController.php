<?php

function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    load_view('index');
}
