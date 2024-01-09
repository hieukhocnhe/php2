<?php

class Student
{
    private $name;
    private $birthDate;
    private $studentCode;
    private $address;
    private $phoneNumber;
    private $homeTown;
    private $major;

    // Constructor
    public function __construct($name, $birthDate, $studentCode, $address, $phoneNumber, $homeTown, $major)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->studentCode = $studentCode;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->homeTown = $homeTown;
        $this->major = $major;
    }
    public function calAge()
    {
        $currentDate = new DateTime();
        $birthDate = new DateTime($this->birthDate);
        $age = $currentDate->diff($birthDate)->y;
        return "$age tuổi.";
    }

    public function printStudentInfo()
    {
        $info = "Student Information:<br>";

        foreach (get_object_vars($this) as $property => $value) {
            $info .= ucfirst($property) . ": " . htmlentities($value) . "<br>";
        }

        $info .= "Age: " . $this->calAge() . "<br>";

        return $info;
    }
}


$student = new Student(
    "Tran Chung Hieu",
    "05/10/2004",
    "PH44302",
    "Thanh Xuân - Hà Nội",
    "0326239019",
    "Sapa - Lào Cai",
    "Lập trình Web Back-end"
);


echo $student->printStudentInfo();
?>