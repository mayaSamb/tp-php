<?php
$d=1;
$t=1;
    $n=(int) readline("Entrez le nombre de chevaux partants: ");
    $p=(int) readline("Entrez le nombre de chevaux joués: ");

    for($i=2;$i<=$p;$i++)
    {
        $d=$d*($i+$n-$p);
        $t=$t*$i;
    }
    echo"Dans l’ordre, une chance sur ".$d." de gagner.\n";
    echo"Dans le désordre, une chance sur ".$d/$t." de gagner.\n";
?>