<?php

function isOnline(){
    $DOMAIN_NAME = "tterwijn.nl";
    return strpos($_SERVER['HTTP_HOST'], $DOMAIN_NAME) !== false;
}