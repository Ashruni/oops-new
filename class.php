<!-- CONSTRUCTOR -->
<?php 
$array=['hai'];
var_dump($array);
?>

<?php 
class User{
    public $name;
    public function getName(){
        return 'Sarthik';
    }
}
$user = new User;
echo $user->getName();
?>
<!-- 1.  Create a PHP class named Rectangle with a constructor that takes the
 length and width as parameters.Implement a method to calculate and return 
 the area of the rectangle. -->

 <?php
 class Rectangle{
    public $length;
    public $width;
    public $area;
    function __construct($length,$width){
       $this->length=$length;
       $this->width=$width;


    }
    function Area(){
        echo "the area is " . $area= ($this->length)*($this->width) ." m^2";
    }
 } 
 $object1=new Rectangle(56,89);
 echo $object1->Area();
 ?>
  <!--2. Define a PHP class called Student with a constructor that takes
  the student's name and three test scores as parameters. 
 Implement a method to calculate and return the average score. -->
 <?php 
 class Student{
    public $name;
    public $m1;
    public $m2;
    public $m3;


    function __construct($name,$m1,$m2,$m3){
        $this->name=$name;
        $this->m1=$m1;
        $this->m2=$m2;
        $this->m3=$m3;
    }   
    function Average(){
        $average=($this->m1+$this->m2+$this->m3)/300;
        $percent = $average *100;
        echo $this->name . ' acquired '.$percent."%" ;
    }
 }
 $object1= new  Student('Rahul',90,99,87);
 $object1->Average();

 ?>

 <!-- Develop a PHP class named Calculator with a constructor that initializes a result variable. 
Implement methods for addition, subtraction, multiplication, and division, each taking a parameter 
and updating the result accordingly. Provide a method to get the current result -->
<?php 
class Calculator{
    public $variable1;
    public $variable2;
    public function __construct($variable1,$variable2){
        $this->variable1 = $variable1;
        $this->variable2 = $variable2;
    }
    public function Addition(){
       echo "sum " .$sum=$this->variable1 + $this->variable2 ."\n";
    }
    public function Subtraction(){
        echo "subtract " .$sub=$this->variable1 - $this->variable2."\n";
    }
    public function Multiplication(){
        echo "product " .$mul=$this->variable1 * $this->variable2."\n";
    }
    public function Division(){
        echo "Division " .$div=$this->variable2/$this->variable1."\n" ;
    }
}
$obj1= new Calculator(34,4);
$obj1->Addition(); 
$obj1->Subtraction();
$obj1->Multiplication();
$obj1->Division();

?>


<!-- Create a PHP class named Circle with a constructor that takes the radius as a parameter.
 Implement methods to calculate and return the area and circumference of the circle. -->

 <?php 
 class Circle{
    public $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function Area(){
       echo "area ". $area= $this->radius* $this->radius ."\n";
    }
    public function Circumference(){
        echo "circumference ". $circumference= 2*3.14*($this->radius);
    }

 }
 $obj=new Circle(40);
 $obj->Area();
 $obj->Circumference();
 
 ?>
  <!-- Define a PHP class called Person with a constructor that takes the person's name and
  age as parameters.Implement a method to determine if the person is 
  a minor (below 18 years old) or an adult -->
<?php 
class Person{
    public $age;
    public function __construct($age){
        $this->age=$age;
    }
    public function Checker(){
        if($this->age<18){
            echo "minor";
        }
        else{
            echo $this->age." not a minor";
        }
    }

}
$obj=new Person(67);
$obj->Checker();
?>

<!-- Develop a PHP class named BankAccount with a
 constructor that initializes the account balance.
 Implement methods for deposit and withdrawal, each 
 taking an amount as a parameter.
 Ensure that the withdrawal method does not 
 allow the balance to go below zero -->

<?php 
Class BankAccount{

    public $accountBalance;

    
    public function __construct($accountBalance){
        $this->accountBalance = $accountBalance;
        
    }
    public function deposits($amount){
        $this->accountBalance += $amount; 
    } 
    public function withdraws($amount){
        $this->accountBalance -= $amount; 
    }
    public function bankAccount(){
        return $this->accountBalance;
    } 
}
$obj = new BankAccount(0);
$obj->deposits(300);
$obj->withdraws(9);
echo $obj->bankAccount();
?>
 <!-- Create a PHP class called TemperatureConverter with a
  constructor that takes a temperature 
value and a scale (Celsius or Fahrenheit) as parameters. 
Implement methods to convert
 the temperature between Celsius and Fahrenheit. -->
 <?php 
 class TemperatureConverter{
    public $value;
    public $scale;
    public function __construct($value,$scale){
        $this->value = $value;
        $this->scale = $scale;
    }
    public function CelsiusConverter(){
        if($this->scale=='F'){
            echo $celsius = ($this->value-32)*5/9;
        }     
    }
    public function FahrenheitConverter(){
        if($this->scale=='C'){
           echo $fahrenheit = ($this->value*9/5)+32;
        }
    }
 }
 $obj=new TemperatureConverter(122,'F');
 $obj->CelsiusConverter();
 $obj->FahrenheitConverter();
echo '           ';
 $obj1=new TemperatureConverter(190,'C');
 $obj1->CelsiusConverter();
 $obj1->FahrenheitConverter();
 ?>


<?php 
class NewClass{
    public $name;
    public function __construct($personName){
        // $personName
        // echo 'initialized';
        $this->name=$personName;
    }
    public function person(){
        return "Persons name is :" .$this->name;
    }

}
$obj1= new NewClass(" Varun");
// "Varun"
echo $obj1->person();

?>


<!-- INHERITANCE -->
<?php 
class Parents{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function details(){
        return "This persons name is  {$this->name}";
    }
}
class Child extends Parents{
    public function __construct($name){
        parent::__construct($name);
    }

}
$obj=new Child("Rahul");
echo $obj->details();

?>


 

<!-- Create a base class called Shape with a method 
calculateArea() that returns 0. Then, create a derived class called Circle that 
overrides the calculateArea() method to calculate and return the area of a circle. -->
<?php 
// class Shape{
//     public $value;
//     public function __construct($value){
//         $this->value=$value;
//     }
//     public function calculateArea(){
        
//     }
// }
// class Circle extends Shape{
//     public function __construct($radius){
//         parent::__construct($radius);
//     }
    
//     public function calculateArea($radius){
//         echo $area =3.14* ($radius )**2 ;
//     }
// }
// $obj1=new Circle();
// $obj1->calculateArea(56);

class Shape{
    public $value;
    public function __construct($value){
        $this->value=$value;
    }
    public function calculateArea(){
        // Base class method, not implemented
    }
}

class Circles extends Shape{
    public function __construct($radius){
        parent::__construct($radius);
    }
    
    public function calculateArea(){
        $radius = $this->value;
        $area = 3.14 * $radius * $radius;
        echo "Area of the circle is: $area";
    }
}

$obj1 = new Circles(56);
$obj1->calculateArea();

?>

<!-- Implement a base class called Vehicle with a method 
startEngine() that echoes "Engine started". Then, create a derived class called Car 
that overrides the startEngine() method to echo "Car engine started". -->
<?php 
class Vehicle{
    public function startEngine(){
        echo "Engine started";
    }
}
class Car extends Vehicle{
    public function startEngine(){
        echo "car engine started";
    }
}

$obj= new Car();
$obj->startEngine();
?>

<!-- Design a base class called Device with a method turnOn() 
that echoes "Device turned on". Afterwards, create a derived 
class called Laptop that overrides the turnOn() method to echo "Laptop booted up". -->
<?php 
class Device{
    public function turnOn(){
        echo "Device turned on";
    }
}
class Laptop extends Device{
    public function turnOn(){
        echo 'laptop booted up';
    }
} 
$obj = new Laptop();
$obj->turnOn()
?>

