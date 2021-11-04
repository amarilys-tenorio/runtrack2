<?php

$love = ["a","e","i","o","u","y","A","E","I","O","U","Y"];

$str ="I'm sorry Dave I'm afraid I can't do that" ;
    for($i=0;isset($str[$i]);$i++){
        foreach ($love as $value) {
            if($str[$i] == $value){
                echo $str[$i];
            }
        }
    }
?>