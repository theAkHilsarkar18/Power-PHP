/*
    Create a PHP class Person with properties name and age,
    and a method printDetails that prints the person's details.
    Add a secondary constructor that initializes the name with
    "Unknown" if not provided.
*/

class Person
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function printDetails()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

