<?php

$lol = [200, 204, 173, 98, 171, 404, 459];

for($ok = 0; isset($lol[$ok]); $ok++){
    if($lol[$ok] %2 == 0){ 
        echo "$lol[$ok] est paire<br>";
    }
    else{
        echo "$lol[$ok] est impaire <br>";
    }
}
?>