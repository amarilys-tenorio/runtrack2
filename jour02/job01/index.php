<?php

$counter = -1;

while ($counter <= 1337){
  $counter++;

if ($counter == 42) {
  echo "<b><u>$counter</b></u>";
}
elseif($counter != 42){
  echo $counter, '<br>';
}
}
?>