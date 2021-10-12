<?php

include_once 'private/libraries/Route.php';
include_once 'private/classes/PhpInclude.php';

const TITLE_TEXT = "Tim Terwijn - Student Software Engineering - HvA HBO-ICT";

Route::add('/', function () {
    $title = TITLE_TEXT;
    $description = "Dit is de website van Tim Terwijn. Hier vind je alle informatie, inclusief mijn CV en Portfolio.";
    $canonical = "https://tterwijn.nl";

    $main = phpInclude("private/pages/Home.php");
    include 'private/classes/Wrapper.php';
});

Route::add('/curriculum-vitae', function () {
    $title = "Curriculum vitae van " . TITLE_TEXT;
    $description = "Dit is het Curriculum vitae van Tim Terwijn. Hier lees je over mijn persoonsgegevens, opleidingen, minoren, stages, werkervaring, vaardigheden, talen en hobby’s.";
    $canonical = "https://tterwijn.nl/curriculum-vitae";

    $main = phpInclude("private/pages/CurriculumVitae.php");
    include 'private/classes/Wrapper.php';
});

Route::add('/portfolio', function () {
    $title = "Portfolio van " . TITLE_TEXT;
    $description = "Dit is de Portfolio van Tim Terwijn. Hier lees je over mijn recente projecten. Je kunt gebruik maken van de knoppen: Github, Demo en Foto om meer te weten te komen over dat specifieke project.";
    $canonical = "https://tterwijn.nl/portfolio";

    $main = phpInclude("private/pages/Portfolio.php");
    include 'private/classes/Wrapper.php';
});

Route::run('/');
