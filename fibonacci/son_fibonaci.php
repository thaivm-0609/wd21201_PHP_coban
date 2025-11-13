<?php 
function fibonaci($n){
    if($n <= 0){
        echo "The amount must be bigger than 0";
        return;
    }



$a = 0;
$b = 1;
 

for( $i =0; $i < $n; $i++){
    echo $a . " ";

    $temp = $a + $b;
    $a = $b;
    $b = $temp;

}

}

fibonaci(10);
?>