<?php
$score = 9.1;

switch ($score) {
    case $score > 9.0 and $score <= 10:
        echo "Xuất sắc";
        break;
    case $score > 8.0 and $score <= 9.0:
        echo "Giỏi";
        break;
    case $score > 7.0 and $score <= 8.0:
        echo "Khá";
        break;
    case $score > 5.0 and $score <= 7.0:
        echo "Trung bình";
        break;
    case $score <= 5.0:
        echo "Yếu";
        break;
    default:
        $score = (float) readline("Enter student's score(1 to 10): ");
}

?>