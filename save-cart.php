<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $items = json_decode(file_get_contents('php://input'), true);

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    foreach ($items as $item) {
        $_SESSION['cart'][] = $item;
    }

    echo json_encode(['status' => 'success', 'message' => 'Item added to cart']);
}
?>
