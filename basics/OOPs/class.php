<?php
class Student
{
    private $id;
    private $name;
    private $age;

    public function setData($id,$name,$age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    public function getData()
    {
        echo "id   : $this->id <br>";
        echo "name : $this->name <br>";
        echo "age  : $this->age <br>";
    }

}

    $s1 = new Student();
    $s1->setData(1001,"Akhil",22);
    $s1->getData();


?>