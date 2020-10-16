<?php

// define a class of an object:
//  * classname starts with capital
//  * class is a blueprint of an object you want to create
//  * functions = methods: things you do with your object

class Cars {
    // mantle of the class > class definition
    //  * Variables (properties)
    //  * Methods (functions)

}
// check PHP-classes
// get_declared_classes returns an array with the names of all the defined classes.
$my_classes = get_declared_classes();

// a variable can only hold one piece of information at a time.
// get_declared_classes returns an array with multiple values.
// a for-each loop runs through the array, handling one value at at time.
// foreach ($variable as $value)
foreach ($my_classes as $class) {
    echo $class . "<br>";
}



