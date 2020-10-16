<?php

// class provides blueprint: same functionality for every different instance (car)
class Cars {

    //properties voor instance: variables like color

    //functionality instance: methods like making the car move
    function greeting(){

        echo "Hello Student";

    }

}

// instantiating class
// every instance has the same blueprint Cars(), but they are different instances:
//  * will always have same properties and functionality provided by class Cars
//  * assign different values to these properties and functionality later on
$bmw = new Cars();
$mercedes = new Cars();

// activate functionality of instance:
//  * syntax: [variable used to store the instance instance] -> method; >> activates method in given class.
$bmw->greeting();