<?php

include 'private/libraries/Route.php';
include 'private/classes/PhpInclude.php';

Route::add('/', function () {
    $title = "Home";
    $description = "Home";

    $main = phpInclude("private/pages/Home.php");
    include 'private/classes/Wrapper.php';
});

Route::add('/shop', function () {
    $title = "Shop";
    $description = "Shop";

    $main = phpInclude('private/pages/Shop.php');
    include 'private/classes/Wrapper.php';
});

Route::add('/test', function () {
    $title = "test title";
    $description = "test description";

    $main = phpInclude('private/pages/Test.php');
    include 'private/classes/Wrapper.php';
});

Route::add('/posttest', function() {
    $raw = trim(file_get_contents("php://input"));
    $json = json_decode($raw, true);

    $array = array("username final"=>$json["username"]);
    $myJSON = json_encode($array);
    
    echo($myJSON);
}, 'post');

Route::run('/');
