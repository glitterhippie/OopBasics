<?php

// class provides blueprint: same functionality for every different instance (car)
class Cars {

    // class variables/properties/attributes
    //  * in a class you need to let php know your using a variable, using the keyword var
    //  * outside of a class you just use a $
    //  * leave empty or assign value
    var $wheel_count = 4;
    var $door_count = 4;

    //functionality instance: methods like making the car move
    function car_detail(){

        // psuedovariable $this
        //  * reference to class in a method, here the property wheel_count in the method car_detail in class Cars
        //  * outside of a class use the name of the instance to refer to the class of the instance,
        //  * inside a class use the keyword $this to refer to class
        // return: returns a value at the end of a function or method
        return "This car has " . $this->wheel_count . " wheels";
    }
}

// instantiating class
// every instance has the same blueprint Cars(), but they are different instances:
//  * will always have same properties and functionality provided by class Cars
//  * assign different values to these properties and functionality later on
$bmw = new Cars();
$mercedes = new Cars();

// access property or variable:
// to access anything outside of a class use the name of the instance
//  * syntax: [$variable_used_to_store_instance] -> [name property]
//      * Don't use $sign here, because its defined already in the class variables.
//      * If you want you can change the value of a class variable for this instance.
echo $bmw->wheel_count = 10 . "<br>";
echo $mercedes->wheel_count . "<br>";
echo $mercedes->car_detail() . "<br>";