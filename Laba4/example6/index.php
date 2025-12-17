<?php
$products = [
    ['name' => 'Ручка', 'price' => 5, 'stock' => 100],
    ['name' => 'Ноутбук', 'price' => 1200, 'stock' => 10],
    ['name' => 'Блокнот', 'price' => 15, 'stock' => 50],
    ['name' => 'Мышь', 'price' => 45, 'stock' => 0],
    ['name' => 'Клавиатура', 'price' => 70, 'stock' => 20],
    ['name' => 'Карандаш', 'price' => 2, 'stock' => 200],
];

$res = array_filter($products, function ($value) {
    return $value['price'] < 50 && $value['stock'] > 0;
});
$html = "";
foreach ($res as $product) {
    $html .= "<p>" . "name: " . $product['name'] . "; price: " . $product['price'] . "; stock: " . $product['stock'];
}
echo $html;