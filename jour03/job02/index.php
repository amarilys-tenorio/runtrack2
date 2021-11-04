<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for($ok = 0; isset($str[$ok]); $ok++){
    if($ok %2 == 0){ 
        echo "$str[$ok]";
    }
}
?>