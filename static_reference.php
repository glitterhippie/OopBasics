<?php

// referencing parent class with static
// static properties or methods can't be accessed through instance.
// class provides blueprint: same functionality for every different instance (car)
class Cars4
{

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
class Trucks4  extends Cars4 {

    static function display() {
        // reference to method in parent class:
        //  * Syntax: parent::method/$property;
        echo parent::car_detail();

    }

}

// reference to method in class:
//  * syntax: Classname::method;
Trucks4::display();