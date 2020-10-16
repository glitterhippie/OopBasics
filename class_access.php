<?php

// class provides blueprint: same functionality for every different instance (car)
class Cars1 {
    // mantle of the class > class definition
    //  * Variables (properties)
    //  * Methods (functions)

    // access control modifiers:
    // used in order to control the flow of a program, not for safety
    // keywords:
    //  * public: can be used throughout whole program
    //  * private: only available for the class its in
    //  * protected: ony available for the class its in and its sub-classes
    public $wheel_count =4; // throughout whole program
    private $door_count = 4; // only in this class
    protected $seat_count = 2; // online in this class and subclasses


    //functionality instance: methods like making the car move
    function car_detail(){
        echo
            "Properties of this car:<br> " .
            $this->wheel_count . " wheels<br>" .
            $this->door_count . " doors<br>" .
            $this->seat_count . " seats<br>";
    }
}

// instantiating class Cars1 into new object bmw
$bmw = new Cars1();

// check variable-visibility:
// echo $bmw->wheel_count; // public: visible
// echo $bmw->door_count; // private: available inside class > error: cannot access private property.
// echo $bmw->seat_count; // protected: available inside class and subclasses > error: Cannot access protected property

// call all properties inside class: now they are all available, because you're inside the class
$bmw->car_detail();