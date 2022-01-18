<?php
function solution($N) {
    $binary = decbin($N);
    print_r(" Binary: ".$binary);

    $array_binary = array_map('intval', str_split($binary));

    $counter_gaps = 0;
    $longest = 0;
    $old_value = 0;
    foreach($array_binary as $key => $value){
        if($value == 1 && $key > 1){
            $longest = $counter_gaps > 0 && $counter_gaps > $longest ? $counter_gaps : $longest;
            $counter_gaps = 0;
        }elseif($value == 0 && $key >= 1){
            $counter_gaps++;
        }
        $old_value = $value;
    }

    return " L: ".$longest;
}

solution($N);
