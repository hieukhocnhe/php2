<?php
//Tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
class ConNguoi
{
    public $name;
    public $address;
    public $yearold;
    public $email;
    public $phoneNumber;
    // Tạo phương thức set cho các thuộc tính trên
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function setYearold($yearold)
    {
        $this->yearold = $yearold;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    // Tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
    public function tinhTuoi()
    {
        return date('Y') - $this->yearold;
    }
    // Tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
    public function print()
    {
        echo "Họ và tên: " . $this->name . "<br>";
        echo "Địa chỉ: " . $this->address . "<br>";
        echo "Tuổi: " . $this->tinhTuoi() . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Số điện thoại: " . $this->phoneNumber . "<br>";
    }
}
;

//Tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
class HocSinh extends ConNguoi
{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    // Tạo phương thức set cho các thuộc tính trên
    public function setDiemToan($diemToan)
    {
        $this->diemToan = $diemToan;
    }
    public function setDiemLy($diemLy)
    {
        $this->diemLy = $diemLy;
    }
    public function setDiemHoa($diemHoa)
    {
        $this->diemHoa = $diemHoa;
    }
    //Tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
    public function avg()
    {
        return round(($this->diemToan + $this->diemLy + $this->diemHoa) / 3, 2);
    }
    //Tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
    // hoten,diachi,tuoi,email,sdt,điểm TB
    public function print()
    {
        parent::print();
        echo "Điểm toán: " . $this->diemToan . "<br>";
        echo "Điểm lý: " . $this->diemLy . "<br>";
        echo "Điểm hóa: " . $this->diemHoa . "<br>";
        echo "Điểm trung bình: " . $this->avg() . "<br>";
    }
}

//Tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
class GiangVien extends ConNguoi
{
    public $luongCB;
    public $soGioDay;
    // Tạo phương thức set cho các thuộc tính trên
    public function setLuongCB($luongCB)
    {
        $this->luongCB = number_format($luongCB, 0, ',', '.') . ' đ';
    }
    public function setSoGioDay($soGioDay)
    {
        $this->soGioDay = $soGioDay;
    }
    // Tạo phương thức tính tổng lương = luongCB *soGioDay
    public function tongLuong()
    {
        $tongLuong = $this->luongCB * $this->soGioDay;
        return number_format($tongLuong, 0, ',', '.') . ' đ';
    }
    //Tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
    // hoten,diachi,tuoi,email,sdt,tổng lương
    public function print()
    {
        parent::print();
        echo "Lương cơ bản: " . $this->luongCB . "<br>";
        echo "Số giờ dạy: " . $this->soGioDay . " giờ<br>";
        echo "Tổng lương: " . $this->tongLuong() . "<br>";
    }
}
echo "Tạo một đối tượng con người : <br>";
$conNguoi1 = new ConNguoi();
$conNguoi1->setName('Trần Chung Hiếu');
$conNguoi1->setAddress('Hà Nội');
$conNguoi1->setYearold(2004);
$conNguoi1->setEmail('hieutcph44302@fpt.edu.vn');
$conNguoi1->setPhoneNumber('0326239019');
$conNguoi1->print();
echo "<br>";

echo "Tạo một đối tượng học sinh : <br>";
$hocSinh1 = new HocSinh();
$hocSinh1->setName('Đỗ Hồng Quân');
$hocSinh1->setAddress('Hà Nội');
$hocSinh1->setYearold(2002);
$hocSinh1->setEmail('quandh.com');
$hocSinh1->setPhoneNumber('0983213131');
$hocSinh1->setDiemToan(9);
$hocSinh1->setDiemLy(9);
$hocSinh1->setDiemHoa(8);
$hocSinh1->print();
echo "<br>";

echo "Tạo một đối tượng giảng viên : <br>";
$giangVien1 = new GiangVien();
$giangVien1->setName('Nguyễn Thành Trung');
$giangVien1->setAddress('Hà Nội');
$giangVien1->setYearold(1999);
$giangVien1->setEmail('trungnt173.com');
$giangVien1->setPhoneNumber('0987654321');
$giangVien1->setLuongCB(100000);
$giangVien1->setSoGioDay(200);
$giangVien1->print();
