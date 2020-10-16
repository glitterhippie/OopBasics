<?php

// class provides blueprint: same functionality for every different instance (car)
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