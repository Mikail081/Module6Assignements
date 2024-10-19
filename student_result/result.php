<?php
function calculateResult($marks) {
    // Check for valid mark range
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        }
    }

    // Check for failure
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Failed. A student scored below 33 in one or more subjects.";
            return;
        }
    }

    // Calculate total and average
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Determine grade using a switch-case statement
    $grade = "";
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 79):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 69):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 59):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 49):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 39):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    // Output the results
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMarks\n";
    echo "Grade: $grade\n";
}

// Example usage
$subjectMarks = [50, 75, 46, 65, 87]; // Array of marks for five subjects
calculateResult($subjectMarks);

?>
