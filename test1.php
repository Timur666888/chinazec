<?php

function filterByPrice($product, $maxPrice)
{
    $filter=[];
    foreach ($product as $items) {
        if ($items['цена'] <= $maxPrice) {
            $filter[]=$items;
        }
    }
    return $filter;
}
    $items = [
    ["название" => "ноутбук", "цена" => 75000],
    ["название" => "мышь", "цена" => 1500],
    ["название" => "клавиатура", "цена" => 3000]
];
$result=filterByPrice($items,5000);
echo "Товары до 5000р.";
foreach ($result as $items) {
    echo "{$items['название']} - {$items['цена']}р.";
}
