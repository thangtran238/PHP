<?php
$month = 13;
$year = 2016;
$c = [1, 3, 5, 7, 8, 10, 12];
$d = [2, 4, 6, 9, 11];
$check = 0;
if (in_array($month,$c)) {
  $check = 1;
}
else if (in_array($month,$d)){
  $check = -1;
};
switch ($check) {
    case (1):
      echo "Thang $month co 31 ngay";
      break;
    case (-1):
      if ($month == 2 ) {
        if ($year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0 )) {
          echo "la nam nhuan thang $month co 29 ngay"; break;
        }else {
          echo "la nam khong nhuan thang $month co 28 ngay"; break;
        }
        
      }else {
        echo "Thang $month co 30 ngay"; break;
      }
    default:
      echo "Thang $month vo hieu";
      break;
}
;

?>