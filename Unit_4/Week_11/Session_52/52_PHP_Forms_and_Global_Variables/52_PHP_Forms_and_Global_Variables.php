<?php

//get data from form
$name = $_POST['name'];

//store the data as a global variable
$GLOBALS['name'] = $name;

//display the data
function display_name() {
    global $name;
    echo "The entered name is $name";
}

//call the function
display_name();
?>