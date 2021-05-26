<?php
$input = "php";
echo"input string $input";
$reverse = strrev($input);
echo"<br/>output string $reverse";
if($input==$reverse){
    echo"is palindrome";
}else{
    echo"not palindrome";
}
?>
