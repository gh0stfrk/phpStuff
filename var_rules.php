<?php

// Variable declaration rules 

# '$' is requried to declare 
$_this_is_a_valid_variable = "valid";

// has to start with a alphabet or (_) underscore
$username = "gh0stfrk"; # valid
// $1user = "invalid"; 

// cannot contain any other special characters except (_) underscore's
// variable names are case-sensitive 
$Username = "gh0st";
$userName = "frk";
// both of the usernames are different variables



// assigning multiple variables 

$a = $b = $c = 40;
echo $a . " " . $b . " " . $c;
?>