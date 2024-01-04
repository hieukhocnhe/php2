<?php

/**
 * Hàm là gì? 
 *  Hàm dùng để chứa một đoạn mã thực hiện một chức năng hoặc 
 *  một công việc cụ thể nhằm giúp có thể tái tạo code và giúp code ngắn gọn.
 * Có 2 loại hàm : 
 *  Hàm có trả về
 *  Hàm không trả về
 * Nếu như trong ngoặc tròn có chứa tham số truyền vào thì gọi là hàm chứa tham số.
 * Hàm có chứa return thì hàm gọi là hàm có trả về
 * Hàm mà k chứa return thì gọi là hàm không trả về
 * Muốn sử dụng hàm -> gọi hàm
 * Nếu hàm không trả về thì gọi thẳng ra
 * Nếu hàm có trả về thì cần thêm biến để lưu trữ hoặc phải sử dụng luôn.
 * 
 * 
 * Eg : Xây dựng hàm có tham số và không trả về, truyền vào hàm những tham số sau : tên, năm sinh, 
 * quê quán, số chứng minh thư, số điện thoại.
 * Hiển thị ra các thông tin trên
 * 
 * 
 * 
 */

function helloWorld()
{
    echo "Hello World !<br> \n";
}

helloWorld();

function hello($name)
{
    echo "Xin chao $name !<br> \n";
}

hello('Hieu');

$arrNums = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function ktSoChanLe($arrNums)
{
    for ($i = 0; $i < count($arrNums); $i++) {
        if ($arrNums[$i] % 2 == 0) {
            echo "$arrNums[$i] la so chan<br> \n";
        } else {
            echo "$arrNums[$i] la so le<br> \n";
        }
    }
}

ktSoChanLe($arrNums);

function thongTinCaNhan($ten, $namSinh, $queQuan, $soChungMinhThu, $soDienThoai)
{
    echo "Thông tin cá nhân :<br>";
    echo "Tên : $ten<br>";
    echo "Năm sinh : $namSinh<br>";
    echo "Quê quán : $queQuan<br>";
    echo "Số chứng minh thư : $soChungMinhThu<br>";
    echo "Số điện thoại : $soDienThoai<br>";
}

thongTinCaNhan('Hiếu', '2004', 'Sapa', '010204005074', '0326239019');


/**
 * 
 * MVC - Model View Controller
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
*/

?>