<?php

/**
 * Khai báo biến
 *  Toán tử
 *  Số học : +, -, *, /, %
 *  Logic : &&, ||
 *  So sánh : >, <, >=, <=, = 
 *  Gán giá trị : +=, -=, *=, /=, %=
 *  Tăng giảm giá trị : ++, --
 * Mảng
 *  Là tập hợp của các phần tử có cùng một kiểu dữ liệu. 
 * 
 * 
 * 
 * 
 *  */
// Khai báo một mảng số nguyên có 10 phần tử, giá trị mỗi phần tử tự cho
// 1.Hiển thị tất cả giá trị có trong phần tử bằng hai cách for, foreach
// 2.Tính tổng các giá trị có trong mảng.

echo "1.1 Hiển thị ra các phẩn tử trong mảng (for) : <br>";

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($nums); $i++) {
    echo "Phẩn tử thứ $i: $nums[$i]<br>";
}

echo "1.2 Hiển thị ra các phẩn tử trong mảng (foreach) : <br>";

foreach ($nums as $key => $value) {
    echo "Phần tử thứ $key : $value<br>";
}

echo "2. Tính tổng các phần tử trong mảng  <br>";
$sum = 0;
foreach ($nums as $key => $value) {
    $sum += $value;
}
echo "Tổng các giá trị trong mảng là : $sum<br>";

$class = [
    [
        'name' => 'Chung Hieu',
        'age' => 20,
        'gender' => 'male',
    ],
    [
        'name' => 'Hong Quan',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Van Thanh',
        'age' => 20,
        'gender' => 'other',
    ],
];



$chicken = ['name' => 'Ga Tay', 'color' => 'yellow', 'age' => 1,];

foreach ($chicken as $key => $value) {
    echo "$key : $value<br>";
}


?>