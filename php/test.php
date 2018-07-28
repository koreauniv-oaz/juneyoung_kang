<?php
$alpha = 52;
$beta = 32;
echo $alpha + $beta.'<br>';

if($alpha<$beta){
    echo $beta.' is big';
} else 
    echo $alpha;

function checkBig($alpha, $beta){
    if($alpha<=$beta){
        return $beta.' is big or same';
    } else 
        return $alpha.' is big'; 
}

echo checkBig(12, 24);
?>