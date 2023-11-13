<html>
    <head>BÀI KIỂM TRA THỰC HÀNH</head>
    <body>
        <p>Câu 1:</p>
<?php
//chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";
?>



<p>Câu 2:</p>
<?php 
// tạo một mảng kết hợp chứa thông tin về sản phẩm
$products = array(
    array("name" => "Áo", "price" => 100000, "quantity" => 15),
    array("name" => "Váy", "price" => 200000, "quantity" => 3),
    array("name" => "Quần", "price" => 300000, "quantity" => 14),
    array("name" => "Giày", "price" => 250000, "quantity" => 20)
);

// hiển thị thông tin của tất cả sản phẩm trong mảng
echo "Thông tin các sản phẩm là: <br>";
foreach ($products as $product) {
    echo "Tên: " . $product["name"] . ", Giá: " . $product["price"] . ", Số lượng: " . $product["quantity"] . "<br>";
}

// tính tổng giá trị của tất cả sản phẩm (price * quantity)
$totalValue = 0;
foreach ($products as $product) {
    $totalValue += $product["price"] * $product["quantity"];
}
echo "Tổng giá trị là: " . $totalValue;

?>
</body></html>