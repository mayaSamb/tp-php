<?php

$p1 = (int) readline("prix d'articles \n ");

$p2 = (int)readline("prix d'articles \n ");

$som= $p1 + $p2;
$pay= (int) readline("somme donnée");
$mon= $pay - $som;

if ($mon >= 10 ){
    echo (" monnaie rendue = 10 euros");
}
elseif  ( $mon >= 5) {
    echo (" monnaie rendue = 5 euros");
} 
else {
    echo (" monnaie rendue = 1 euro");
}


?>