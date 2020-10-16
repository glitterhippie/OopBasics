<?php
// define a class of an object:
// class provides blueprint: same functionality for every different instance (car)
//  * classname starts with capital
//  * functions = methods: things you do with your object

class Cars {
    // mantle of the class > class definition, containing:
    //  * Variables (properties) for instance.
    //  * Methods (functions)

    // class variables/properties/attributes
    //  * in a class you need to let php know your using a variable, using the keyword var
    //  * outside of a class you just use a $
    //  * leave empty or assign value
    var $wheel_count = 4;

    //functionality instance: methods like making the car move
    function car_detail() {
        // pseudo variable $this
        //  * reference to class in a method, here the property wheel_count in the method car_detail in class Cars
        //  * outside of a class use the name of the instance to refer to the class of the instance,
        //  * inside a class use the keyword $this to refer to class
        // return: returns a value at the end of a function or method
        return "This car has " . $this->wheel_count . " wheels";

    }
}

// instance
// instantiating class creating new object
// every instance has the same blueprint Cars(), but they are different instances:
//  * will always have same properties and functionality provided by class Cars
//  * assign different values to these properties and functionality later on
$bmw = new Cars();
$mercedes = new Cars();

// activate functionality of instance:
//  * syntax: [variable used to store the instance instance] -> method; >> activates method in given class.
// access property or variable:
// to access anything outside of a class use the name of the instance
//  * syntax: [$variable_used_to_store_instance] -> [name property]
//      * Don't use $sign here, because its defined already in the class variables.
//      * If you want you can change the value of a class variable for this instance.
echo $bmw->wheel_count = 10 . "<br>";
echo $mercedes->wheel_count . "<br>";
echo $mercedes->car_detail() . "<br>";

// class inheritance
// define a new class Trucks: new blueprint
// contains nothing at first
// in order for the class to inherit something use the keyword extends [class to inherit from]
class Trucks extends Cars{

    // even though class Trucks is empty, by using the keyword extends, class Trucks inherits everything from
    // class Cars. So it will by default inherit $wheels and it's value.
    // To overwrite the value of a property, create a new
    // variable wheels and assign a different value to it.

    //var $wheels = 10;
}

//instantiating class Trucks: creating new object $tacoma
$tacoma = new Trucks();
echo $tacoma->wheel_count;

//access control modifiers
class Cars1 {
    // access control modifiers:
    // used in order to control the flow of a program, not for safety
    // keywords:
    //  * public: can be used throughout whole program
    //  * private: only available for the class its in
    //  * protected: ony available for the class its in and its sub-classes
    public $wheel_count1 =4; // throughout whole program
    private $door_count1 = 4; // only in this class
    protected $seat_count1 = 2; // online in this class and subclasses

    function car_detail() {
        echo
            " Properties of this car:<br> " .
            $this->wheel_count1 . " wheels<br>" .
            $this->door_count1 . " doors<br>" .
            $this->seat_count1 . " seats<br>";
    }
}

// access control modifiers
// instantiating class into new object bmw
$bmw1 = new Cars1();
// check variable-visibility:
// echo $bmw->wheel_count; // public: visible
// echo $bmw->door_count; // private: available inside class > error: cannot access private property.
// echo $bmw->seat_count; // protected: available inside class and subclasses > error: Cannot access protected property
// call all properties inside class: now they are all available, because you're inside the class
$bmw->car_detail();

// static modifier
class Cars2 {
    // static modifier properties and methods
    // declaring as static makes properties and methods accessible without needing an instantiation of the class.
    //  * a property declared as static cannot be accessed with an instantiated class object
    //  * a static method can
    //  * scope resolution operator :: allows access to static properties and methods

    // difference between regular and static modifier property is:
    //  * regular property: attached to the instance. So you always have to use the instance to get that property.
    //  * static modifier property: attached to the class, so you don't need the instance, you refer to it by classname.
    //
    // declare a property static:
    static $door_count = 5;
    static $seat_count = 2;
    static $wheel_count = 4;


    // static method
    // Syntax: Classname::method;
    //  * the Scope Resolution Operator: :: access to static, constant, and overridden properties & methods of a class.
    //  * instead of the instance, you call the class
    static function car_detail(){
        echo
            "<br>Properties of this car:<br>"
            . Cars2::$wheel_count . " wheels <br>"
            . Cars2::$door_count . " doors <br>"
            . Cars2::$seat_count . " seats";
    }
}

// instantiating class Cars2 into new object bmw
// $bmw = new Cars2();
// echo $bmw->door_count;
// returns error: accessing static property Cars2::$door_count as non static: you are trying to access a static
// property door_count, through instance $bmw.

//syntax static modifier:
// Syntax: Classname::$property;
//  * the Scope Resolution Operator: :: access to static, constant, and overridden properties & methods of a class.
//  * instead of the instance (object), you call the class
echo Cars2::$door_count;

echo Cars2::car_detail();

// getters and setters are used to access information inside a private modifier
// this way you have more control over the flow of a program

//setters and getters
// class provides blueprint: same functionality for every different instance (car)
class Cars3 {
    // mantle of the class > class definition
    //  * Variables (properties)
    //  * Methods (functions)

    //private property that can only be accessed inside a class
    private $door_count = 4;

    //functionality instance: methods like making the car move
    function get_values(){

        echo $this->door_count;

    }

    // change value of door_count
    function set_values(){

        $this->door_count = 10;

    }
}

//instantiating class
$bmw = new Cars3();

// call set_values()-method and change the value of $door_count
$bmw->set_values();

// call get_values()-method: door_count changes to 10. By calling the set_values()-method we are able to access and
// change the value of the private modifier. But! In order to change the value you have to call the set_values()-method
$bmw->get_values();


// reference parent class with static
// referencing parent class with static
// static properties or methods can't be accessed through instance.
class Cars4 {

    // static modifier property: attached to the class, so you don't need the instance, you refer to it by classname.
    static $wheel_count = 4;


    // static method: returning value of property
    // you can reference to a static in the same class using the keyword self
    static function car_detail()
    {

        return self::$wheel_count;

    }
}

// subclass: all properties and methods are inherited from parent
class Trucks4 extends Cars4 {

    static function display()
    {
        // reference to method in parent class:
        //  * Syntax: parent::method/$property;
        echo parent::car_detail();

    }

}

// reference to method in class:
//  * syntax: Classname::method;
Trucks4::display();


// constructors and destructors
// automatically called when instantiating a class
class Cars5 {

    // properties
    public $wheel_count = 4; // throughout whole program
    // static property:
    //  * stays in one place, does not move anywhere. Everytime you create an instance, you keep that value
    static $door_count = 4;



    // methods (functionality)
    // constructor: get called automatically everytime you create an instance.
    // initializes something
    function __construct() {
        echo
            "Properties of this car:<br> " .
            $this->wheel_count . " wheels<br>" .
            //calling static property within construct methode, incrementing $door_count when class is instantiated
            self::$door_count++ . " doors<br>"; // increment by one
    }

    // destructor
    // uninitializes something
    // barely used
    function __destruct()
    {
        echo
            "Doors on this car<br> " .
            self::$door_count-- . " doors<br>"; // decrement by one
    }
}


// instantiating class Cars5 into new object bmw
// constructor gets called automatically, so you dont have to call it
// in constructor everytime we create an instance, $door_count is incremented. so the next instance is going to have a
// value of 5 for $door_count. That value keeps being maintained by the last instance.
$bmw = new Cars5();
$mercedes = new Cars5();
$toyota = new Cars5();