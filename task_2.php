<?php
function removeEvenNumbers($numbers) {
    $filteredNumbers = array_filter($numbers, function ($value) {
        return $value % 2 != 0;
    });

    $resultString = implode(', ', $filteredNumbers);

    echo $resultString;
}

$numbers = [1,2,3,4,5,6,7,8,9,10]; 
removeEvenNumbers($numbers);
?>
