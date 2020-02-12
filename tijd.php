<?php 
 echo "Chooser your'e digit with + letter S begind the digit" . PHP_EOL;
$timeChoice = readline("");

if (strpos($timeChoice , "s") !== false ){
    echo $timeChoice . "econdes" . PHP_EOL;
}

if (strpos($timeChoice , "s") != true ){
    echo "Geen tijd gevonden" . PHP_EOL;
}
?>