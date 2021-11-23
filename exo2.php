<?php
$a=random_int(10,20);



do     {
    $b= (int) readline ("donner le nombre exact:");
    
    

    if ($a < $b){
        print("plus petit  \n ");
    }
elseif  ($a > $b){
        print("plus grand \n ");
    }
else{
    print("ok ");
}
}while( $a != $b)





?>