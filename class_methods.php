<?php


class Cars {
    // mantle of the class > class definition: variables (properties), methods (functions)
    // method is a function in a class, same rules and name

    // methods:
    //  * functions declared in a class
    //  * tell your object what to do and how to behave
    //  * start with function
    function greeting(){

    }

    function greeting2(){

    }
}

// check class_methods
// get_class_methods returns an array with the names of all the defined methods in the specified class (parameter).
$the_methods = get_class_methods('Cars');


// a variable can only hold one piece of information at a time.
// get_class_methods() returns an array with multiple values.
// a for-each loop runs through the array, handling one value at at time.
// foreach ($variable as $value)
foreach ($the_methods as $method){
    echo $method . "<br>";
}