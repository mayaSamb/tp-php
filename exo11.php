<?php
$a=1;

    $n=(int) readline("Entrez le nombre de chevaux partants: ");
    $p=(int) readline("Entrez le nombre de chevaux joués: ");
    
    for($i=2;$i<=$n;$i++)
    {
        $a=$a*$i;
    }
    $d=1;
    for($i=2;$i<=$n-$p;$i++)
    {
        $d=$d*$i;
    }
    $t=1;
    for($i=2;$i<=$p;$i++)
    {
        $t=$t*$i;
    }
    echo"Dans l’ordre, une chance sur ".$a/$d." de gagner.\n";
    echo"Dans le désordre, une chance sur ".$a/($d*$t)." de gagner.\n";
?>