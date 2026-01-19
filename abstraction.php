<?php
abstract class Person{
    protected $name;
    protected $gender;
    public function __construct($name,$gender)
    {
        $this->name=$name;
        $this->gender=$gender;
    }
    abstract public function show();
}
class Student extends Person{
    private $age;
    public function __construct($name, $gender,$age)
    {
        parent::__construct($name,$gender);
        $this->age=$age;
    }
    public function show()
    {
        echo $this->name .'</br>';
        echo $this->gender .'</br>';
        echo $this->age .'</br>';
    }
}
$student =new Student('joker','male',21);
$student->show();
?>