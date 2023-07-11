<?php
function fibonacci($num)
{
    $num_1 = 0;
    $num_2 = 1;
    $listfibonacci = [$num_1, $num_2];
    $i = 0;
    while ($i <= $num) {
        $listfibonacci[] = $listfibonacci[$i-1] + $listfibonacci[$i-2];
        $i++;
    }
    return $listfibonacci;
}
?>