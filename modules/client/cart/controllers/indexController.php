<?php
function construct()
{
    load_model('index');
    load('helper', 'format');
}

function indexAction()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pro = get_pro_by_id($id);
        $qty = 1;
        if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
            $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
        }
        $_SESSION['cart']['buy'][$id] = array(
            'id' => $pro['id'],
            'name_product' => $pro['name_product'],
            'image' => $pro['image'],
            'price' => $pro['price'],
            'qty' => $qty,
            'sub_total' => $pro['price'] * $qty
        );
        update_info_cart();
        header('Location: ?role=client&mod=cart');
    }
    if (!empty($_SESSION['cart'])) {
        $data['cart'] = $_SESSION['cart'];
        $total = get_total_cart();
        $data['total'] = $total;
        load_view('index', $data);
    }
}
function deleteAction()
{
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }
    }
    header('Location: ?role=client&mod=cart');
}

function indexPostAction()
{
    show_array($_POST['qty']);
    die;
    update_cart($_POST['qty']);
    header("Location: ?role=client&mod=cart");
}
