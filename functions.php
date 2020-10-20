<?php

function addArticle($article)
{
    if (!empty($_SESSION['cart'][$article])) {
        $_SESSION['cart'][$article]++;
    } else {
        $_SESSION['cart'][$article] = 1;
    }
}

function deleteArticle($article)
{
    $panier = $_SESSION['cart'];
    if(!empty($panier[$article])){
        unset($panier[$article]);
    }
    $_SESSION['cart'] = $panier;
}

function getCartInfos()
{
    $panier = $_SESSION['cart'];
    $panierInfos = [];
    foreach ($panier as $article => $qty) {
        $panierInfos[] = [
            'product' => $article,
            'qty' => $qty
        ];
    }
    return $panierInfos;
}

