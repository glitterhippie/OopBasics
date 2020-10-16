<?php

// define a class of an object:
// class provides blueprint: same functionality for every different instance (car)
class Cars
{
    // mantle of the class > class definition: variables (properties), methods (functions)
    var $wheels = 4;

    function greeting()
    {
        return "hello";
    }
}

// instantiating class Cars: creating new object $bmw
$bmw = new Cars();

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
echo $tacoma->wheels;