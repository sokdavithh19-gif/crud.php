<?php
 class Animal {
    protected $name;
    protected $id;
    public function __construct($name,$id)
    {
        $this->name = $name;
        $this->id = $id;
    }
    public function show(){
        echo $this->id .'</br>';
        echo $this->name .'</br>';
    }
 }
 class Person extends Animal {
    private $gender;
    public function __construct($name, $id , $gender)
    {
      parent::__construct($id,$name);
      $this->gender=$gender;
    }
    public function show()
    {
        parent::show();
        echo $this->gender;
    }
 }
 $person =new Person(1,'jake','male');
 $person->show();
?>