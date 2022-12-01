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
        $product = get_product_by_id($id);
        $quantity = 1;
        if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
            $quantity = $_SESSION['cart']['buy'][$id]['quantity'] + 1;
        }

        $_SESSION['cart']['buy'][$id] = array(
            'id_product' => $product['id'],
            'name_product' => $product['name_product'],
            'image' => $product['image'],
            'price' => $product['price'],
            'quantity' => $quantity,
            'sub_total' => $product['price'] * $quantity
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
    $quantity = $_POST['quantity'];
    update_cart($quantity);
    header("Location: ?role=client&mod=cart");
}
