<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        $letterGrade = getLetterGrade($average);
        
        echo "$student's average grade: $letterGrade (Marks = $average)\n";
    }
}

function getLetterGrade($average) {
    if ($average < 70) {
        return 'B';
    } elseif ($average < 75) {
        return 'A-';
    } elseif ($average < 80) {
        return 'A';
    } elseif ($average >= 80) {
        return 'A+';
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 80, 'English' => 80, 'Science' => 80),
    'Student2' => array('Math' => 75, 'English' => 80, 'Science' => 80),
    'Student3' => array('Math' => 50, 'English' => 60, 'Science' => 50)
);

calculateAverageGrades($studentGrades);
?>
