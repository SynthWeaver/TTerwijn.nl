<?php

include_once 'private/libraries/Route.php';
include_once 'private/classes/PhpInclude.php';

Route::add('/', function () {
    $title = "Homepagina van Tim Terwijn";
    $description = "Dit is de Homepagina van Tim Terwijn. Naast een korte introductie over mij, kun je hier ook andere informatie over vinden zoals mijn CV en Portfolio.";

    $main = phpInclude("private/pages/Home.php");
    include 'private/classes/Wrapper.php';
});

Route::add('/curriculum-vitae', function () {
    $title = "CV van Tim Terwijn";
    $description = "Dit is de CV van Tim Terwijn. Hier kun je informatie over mij zoals persoonsgegevens, opleidingen, minoren, stages, werkervaring, vaardigheden, talen en hobby’s vinden.";

    $main = phpInclude("private/pages/CurriculumVitae.php");
    include 'private/classes/Wrapper.php';
});

Route::add('/portfolio', function () {
    $title = "Portfolio van Tim Terwijn";
    $description = "Dit is de Portfolio pagina van Tim Terwijn. Hier kun je meer informatie over mijn recente projecten vinden. Je kunt gebruik maken van de knoppen: Github, Demo en Foto om meer te weten te komen over dat specifieke project.";

    $main = phpInclude("private/pages/Portfolio.php");
    include 'private/classes/Wrapper.php';
});

Route::add('/shop', function () {
    $title = "Shop";
    $description = "Shop";

    $main = phpInclude('private/pages/Shop.php');
    include 'private/classes/Wrapper.php';
});

// Route::add('/test', function () {
//     $title = "test title";
//     $description = "test description";

//     $main = phpInclude('private/pages/Test.php');
//     include 'private/classes/Wrapper.php';
// });

// Route::add('/posttest', function() {
//     $raw = trim(file_get_contents("php://input"));
//     $json = json_decode($raw, true);

//     $array = array("username final"=>$json["username"]);
//     $myJSON = json_encode($array);
    
//     echo($myJSON);
// }, 'post');

Route::run('/');
