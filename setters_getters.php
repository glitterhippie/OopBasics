<?php
// getters and setters are used to access information inside a private modifier
// this way you have more control over the flow of a program


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