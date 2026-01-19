<?php
// constructor with parameters
class User
{
    private $id;
    private $name;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function show()
    {
        echo $this->id . '</br>';
        echo $this->name . '</br>';
    }
}
$book = new User(1, 'Davith');
$book->show();
?>
<?php
// constructor without parameters
class Box
{
    private $id;
    private $name;
    public function __construct()
    {
        $this->id = 2;
        $this->name = 'JavaScript';
    }
    public function show()
    {
        echo $this->id . '</br>';
        echo $this->name . '</br>';
    }
}
$book = new Box;
$book->show();
