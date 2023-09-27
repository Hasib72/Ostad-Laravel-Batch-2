<?php
// Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students. Each student
// has grades for three subjects: Math, English, and Science. Write a PHP function which takes"$studentGrades" as
// an argument to calculate and print the average grade for each student.

/**
 * @param float|int $mark
 * @return string
 */
function getLetterGrade(float|int $mark): string
{
    if ($mark >= 80) {
        return "A+";
    } elseif ($mark >= 70) {
        return "A";
    } elseif ($mark >= 60) {
        return "A-";
    } elseif ($mark >= 50) {
        return "B";
    } elseif ($mark >= 40) {
        return "C";
    } elseif ($mark >= 33) {
        return "D";
    } else {
        return "F";
    }
}

/**
 * @param array $array
 * @return array
 */
function calculateAverageGrades(array $array): array
{
    $averageGrades = [];

    // Calculate the average grade for each student
    foreach ($array as $studentName => $subjects) {
        $averageMarks = array_sum($subjects) / count($subjects);
        $averageGrades[$studentName] = getLetterGrade($averageMarks);
    }

    return $averageGrades;
}

$studentGrades = [
    "Hasibul" => ["math" => 98, "english" => 82, "science" => 90],
    "Mary" => ["math" => 68, "english" => 12, "science" => 80],
    "Jon" => ["math" => 30, "english" => 39, "science" => 76]
];

$result = calculateAverageGrades($studentGrades);


foreach ($result as $studentName => $letterGrade) {
    echo "$studentName: $letterGrade\n";
}