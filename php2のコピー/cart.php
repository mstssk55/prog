<?php
session_start();


$view = "";
foreach($_SESSION["cart"] as $key => $value){
    $view .= '<li class="cart-item">';
    $view .= '<p class="cart-thumb">';
    $view .= '<img src="./img/'.$value[3].'" width="200">';
    $view .= '</p>';
    $view .= '<h2 class="cart-title">';
    $view .= $value[0];
    $view .= '</h2>';
    $view .= '<p class="cart-price">';
    $view .= $value[1];
    $view .= '</p>';
    $view .= '<p class="cart-number">';
    $view .= $value[2];
    $view .= '</p>';
    $view .= '<a href="cartremove.php?id='.$key.'" class="btn_delete">削除</a>';
    $view .= '</li>';

};




?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
<?=$view?>

</ul>
    
</body>
</html>