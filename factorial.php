<?php
$number = 5;

$factorial = 1;
for($a=$number;$a>1;$a--){
    $factorial = $factorial * $a;
}
echo"The factorial of 5 is" . $factorial;
?>