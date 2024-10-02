<?php
//ABTRACT

// // Abstract class definition
// abstract class Animal {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }
//     // Abstract method
//     abstract public function makeSound();
//     public function describe() {
//         return "This is a {$this->name}.";
//     }
// }
// // Subclass implementing abstract method
// class Dog extends Animal {
//     public function makeSound() {
//         return "Bark!";
//     }
// }
// // Subclass implementing abstract method
// class Cat extends Animal {
//     public function makeSound() {
//         return "Meow!";
//     }
// }
// $dog = new Dog("Dog");
// echo $dog->describe();  
// echo $dog->makeSound(); 

// echo $cat ->describe();
// echo $cat->makeSound();






//INTEFERACE
// // Interface definition
// interface Animal {
//   public function makeSound();
// }

// // Class definitions
// class Cat implements Animal {
//   public function makeSound() {
//     echo " Meow ";
//   }
// }

// class Dog implements Animal {
//   public function makeSound() {
//     echo " Bark ";
//   }
// }

// class Mouse implements Animal {
//   public function makeSound() {
//     echo " Squeak ";
//   }
// }

// class Lion implements Animal {
//     public function makeSound() {
//       echo " Roar ";
//     }
//   }

// // Create a list of animals
// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $lion = new Lion();
// $animals = array($cat, $dog, $mouse, $lion);

// // Tell the animals to make a sound
// foreach($animals as $animal) {
//   $animal->makeSound();
// }








//TRAIT
// // Define a trait with reusable functionality
// trait AnimalTrait {
//     protected $name;

//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function describe() {
//         return "This is a {$this->name}.";
//     }
// }

// // Dog class using the AnimalTrait
// class Dog {
//     use AnimalTrait;

//     public function makeSound() {
//         return "Bark!";
//     }
// }

// // Cat class using the AnimalTrait
// class Cat {
//     use AnimalTrait;

//     public function makeSound() {
//         return "Meow!";
//     }
// }

// // Instantiate Dog and Cat objects
// $dog = new Dog();
// $dog->setName("Dog");
// echo $dog->describe();  
// echo $dog->makeSound(); 
// echo "<br>";           
// $cat = new Cat();
// $cat->setName("Cat");
// echo $cat->describe();  
// echo $cat->makeSound(); 



//NAMESPACE


// Declare namespace for the Controller
namespace MyApp\Controllers;

class AnimalController {
    public function index() {
        return "Animal Controller Index";
    }
}

// Another file with a different namespace
namespace MyApp\Models;

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}


$controller = new \MyApp\Controllers\AnimalController();
echo $controller->index(); 

$animal = new \MyApp\Models\Animal("Lion");
echo $animal->getName();




?>




