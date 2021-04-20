<?php
function isFirstLetterUpperCase($str){
    $regular = '/^[A-Z]/';
    if (preg_match($regular,$str)){
        echo("String's first character is uppercase");
    }
    else
        echo("String's first character is not uppercase");
}
isFirstLetterUpperCase('Hoang van Tu');
echo "</br>";
isFirstLetterUpperCase('HOANG VAN TU');
echo "</br>";
isFirstLetterUpperCase('hoang van Tu');