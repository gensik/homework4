<?php
$a  = range(90, 150, 3);
$b = range(90, 150, 3);



array_multisort($b, SORT_DESC);
$c = array_combine($a, $b);
echo "<pre>" ,var_dump($c), "</pre>";


array_multisort($b, SORT_ASC);
$d = array_combine($a, $b);
echo "<pre>" ,var_dump($d), "</pre>";

