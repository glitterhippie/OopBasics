<?php

// class provides blueprint: same functionality for every different instance (car)
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
    //public $wheel_count =4; // throughout whole program


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

// echo $bmw->wheel_count;
// returns error: accessing static property Cars2::$door_count as non static: you are trying to access a static
// property door_count, through instance $bmw.

//syntax static modifier:
    // Syntax: Classname::$property;
    //  * the Scope Resolution Operator: :: access to static, constant, and overridden properties & methods of a class.
    //  * instead of the instance (object), you call the class
echo Cars2::$door_count;

echo Cars2::car_detail();