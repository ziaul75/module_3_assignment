<?php
function sortGradesDescending($grades) {
    arsort($grades);
    echo '[' . implode(', ', $grades) . ']';
}
   $grades = array(85, 92, 78, 88, 95);
    sortGradesDescending($grades);
?>
