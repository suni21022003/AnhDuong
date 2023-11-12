<?php
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function isEven($number) {
    if($number % 2 == 0) {
        return true;
    }
    else {
        return false;
    }
}

$number = 10;
if(isEven($number)) {
    echo "$number là số chẵn.";
}
else {
    echo "$number không phải là số chẵn.";
}

echo "<br>";
?>



<?php
//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sum($n) {
    $total = 0;
    for ($i = 1; $i <= $n; $i++) {
        $total += $i;
    }
    return $total;
}

$n = 10;
echo "Tổng của các số từ 1 đến $n là: " . sum($n);
echo "<br>"
?>



<?php
//3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n";
    }
    echo "\n";
}
echo "<br>";
?>



<?php
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function contains($string, $word) {
    if(strpos($string, $word) !== false) {
        return true;
    }
    else {
        return false;
    }
}

$string = "Suni Ánh Dương";
$word = "Suni";
if(contains($string, $word)) {
    echo "Chuỗi '$string' chứa từ '$word'.";
}
else {
    echo "Chuỗi '$string' không chứa từ '$word'.";
}
echo "<br>";
?>



<?php
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$max = max($array);
$min = min($array);
echo "Giá trị lớn nhất trong mảng là: $max\n";
echo "Giá trị nhỏ nhất trong mảng là: $min\n";
echo "<br>";
?>



<?php
//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$array = array(3, 9, 7, 1, 5, 11);
sort($array);
echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: ";
foreach($array as $value) {
    echo "$value ";
}
echo "<br>";
?>



<?php
//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($n) {
    $result = 1;
    for($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$n = 10;
echo "Giai thừa của $n là: " . factorial($n);
echo "<br>";
?>



<?php
//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number) {
    if($number < 2) {
        return false;
    }
    for($i = 2; $i <= sqrt($number); $i++) {
        if($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$start = 1;
$end = 100;
echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
for($i = $start; $i <= $end; $i++) {
    if(isPrime($i)) {
        echo "$i ";
    }
}
echo "<br>";
?>



<?php
//9. Viết chương trình PHP để tính tổng của các số trong một mảng.
$array = array(0, 2, 4, 6, 8);
$sum = array_sum($array);
echo "Tổng của các số trong mảng là: $sum";
echo "<br>";
?>



<?php
//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    if($n == 0) {
        return 0;
    }
    else if($n == 1) {
        return 1;
    }
    else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$start = 1;
$end = 10;
echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
for($i = $start; $i <= $end; $i++) {
    echo fibonacci($i) . " ";
}
echo "<br>";
?>



<?php
//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $n = strlen($number);
    while($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $n);
        $temp = (int)($temp / 10);
    }
    if($number == $sum) {
        return true;
    }
    else {
        return false;
    }
}

$number = 153;
if(isArmstrong($number)) {
    echo "$number là số Armstrong.";
}
else {
    echo "$number không phải là số Armstrong.";
}
echo "<br>";
?>


<?php
//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
$array = array('bố', 'mẹ', 'anh', 'chị');
array_splice($array, 2, 0, 'em');
print_r($array);
echo "<br>";
?>



<?php
//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
$array = array('bố', 'mẹ', 'em', 'bố', 'chị', 'em');
$result = array_unique($array);
print_r($result);
echo "<br>";
?>



<?php
//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
$array = array(0 => 'bố', 1 => 'mẹ', 2 => 'anh', 3 => 'chị');
$key = array_search('anh', $array); 
$key = array_search('mẹ', $array);  
echo "<br>";
?>



<?php
//15. Viết chương trình PHP để đảo ngược một chuỗi.
$string = "Suni Anh Duong";
echo strrev($string); 
echo "<br>";
?>



<?php
//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$array = array('bố', 'mẹ', 'anh', 'chị', 'em');
echo count($array); 
echo "<br>";
?>



<?php
//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
$string = "Suni";
$reverse = strrev($string);

if ($string == $reverse) {
    echo "Chuỗi \"$string\" là chuỗi Palindrome.";
} else {
    echo "Chuỗi \"$string\" không phải là chuỗi Palindrome.";
}
echo "<br>";
?>



<?php
//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
$array = array('bố', 'mẹ', 'anh', 'bố', 'chị', 'bố', 'em', 'mẹ');
$result = array_count_values($array);
print_r($result);
echo "<br>";
?>



<?php
//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$array = array(9, 17, 2, 5, 4);
rsort($array);
print_r($array);
echo "<br>";
?>



<?php
//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.

$array = array('bố', 'mẹ', 'con gái');
// *Thêm phần tử vào cuối mảng
array_push($array, 'con trai');
print_r($array);
echo "<br>";

// **Thêm phần tử vào đầu mảng
array_unshift($array, 'con trai');
print_r($array);
echo "<br>";
?>



<?php
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
$array = array(3, 9, 1, 5, 7);
rsort($array);
echo "Số lớn thứ hai trong mảng là: " . $array[1] . "<br>";
?>



<?php
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}
$a = 20;
$b = 40;
echo "Ước số chung lớn nhất của $a và $b là: " . gcd($a, $b) . "<br>";
echo "Bội số chung nhỏ nhất của $a và $b là: " . lcm($a, $b) . "<br>";
?>



<?php
//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}

$number = 20;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
echo "<br>";
?>



<?php
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
$array = array(1, 12, 13, 34, 65, 46, 17, 38, 9);
$max = null;

foreach ($array as $value) {
    if ($value % 2 != 0) {
        if ($max == null || $value > $max) {
            $max = $value;
        }
    }
}

if ($max != null) {
    echo "Số lẻ lớn nhất trong mảng là: $max";
} else {
    echo "Không có số lẻ nào trong mảng.";
}
echo "<br>";
?>



<?php
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 21;
if (isPrimeNumber($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}echo "<br>";
?>



<?php
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
$array = array(-2, 4, -6, 8, -10, 12, -14, 16, -18);
$max = null;

foreach ($array as $value) {
    if ($value > 0) {
        if ($max == null || $value > $max) {
            $max = $value;
        }
    }
}

if ($max != null) {
    echo "Số dương lớn nhất trong mảng là: $max";
} else {
    echo "Không có số dương nào trong mảng.";
}
echo "<br>";
?>



<?php
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
$array = array(-1, 3, -5, 7, -9, 11, -13, 15, -17);
$max = null;

foreach ($array as $value) {
    if ($value < 0) {
        if ($max == null || $value > $max) {
            $max = $value;
        }
    }
}

if ($max != null) {
    echo "Số âm lớn nhất trong mảng là: $max";
} else {
    echo "Không có số âm nào trong mảng.";
}
echo "<br>";
?>



<?php
//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
$n = 30;
$sum = 0;

for ($i = 1; $i <= $n; $i += 2) {
    $sum += $i;
}

echo "Tổng các số lẻ từ 1 đến $n là: $sum" . "<br>";
?>



<?php
//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
$start = 1;
$end = 80;

for ($i = $start; $i <= $end; $i++) {
    if (sqrt($i) == floor(sqrt($i))) {
        echo "$i là số chính phương.<br>";
    }
}
echo "<br>";
?>



<?php
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
$haystack = "Suni Anh Duong";
$needle = "Duong";

if (strpos($haystack, $needle) !== false) {
    echo "$needle là chuỗi con của $haystack.";
} else {
    echo "$needle không phải là chuỗi con của $haystack.";
}
echo "<br>";
?>
