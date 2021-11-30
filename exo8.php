<?php
$max = 0;
$i=0;

for($i=0; $i < 20 ; $i++)
{
    
    $b = (int) readline("entrez un nombre   \n ".($i+1));

if ($b>$max){
 $max=$b;
 $b=$b+1;
   
}
else 
{
    $max=$max;
}

}

echo( "la valeur max: ".$max );
echo ( " la position est : $i ")

?>
