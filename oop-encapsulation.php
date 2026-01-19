<?php
class Books
{
    private $id;
    private $name;
    public function data($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function showData()
    {
        echo $this->id . '</br>';
        echo $this->name;
    }
}
$book = new Books();
$book->data(1, 'php');
$book->showData()
?>
