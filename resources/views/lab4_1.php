<?php


$map = array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3"
);

// Accessing values
echo $map["key1"];  // Output: value1

// Modifying values
$map["key2"] = "new value";

// Adding new key-value pairs
$map["key4"] = "value4";

// Removing a key-value pair
unset($map["key3"]);

$person = array(
    "name" => "Bogdan",
    "age" => 19,
    "country" => "Ukraine"
);

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
// For loop example
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Class and inheritance example
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . " is meowing.<br>";
    }
}

// Creating objects
$animal = new Animal("Generic Animal");
$cat = new Cat("Vasya");

// Calling methods
$animal->eat();
$cat->eat();
$cat->meow();

// Singleton pattern
class Singleton {
    private static $instance;

    private function __construct() {
        // Private constructor to prevent direct instantiation
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Other methods and properties...
}

// Creating a singleton instance
$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if($singleton === $singleton2)
	echo "same instance";
else
	echo "not same instance";
?>	