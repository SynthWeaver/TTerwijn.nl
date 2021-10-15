<?php

function isOnline(){
    $DOMAIN_NAME = "tterwijn.nl";
    return strpos($_SERVER['HTTP_HOST'], $DOMAIN_NAME) !== false;
}

function hasWww(){
    return preg_match('/www/', $_SERVER['HTTP_HOST']);
}

function hasHttp(){
    return isset($_SERVER['HTTPS']);
}

function getFolder(){
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $thisPath = dirname($_SERVER['PHP_SELF']);
    $onlyPath = str_replace($rootPath, '', $thisPath);
    return $onlyPath;
}

// redirect permanent from http and www to https://tterwijn.nl
if(false){//isOnline()){
    if(hasHttp() || hasWww()){

        $DOMAIN = "https://tterwijn.nl";
        $FOLDER = getFolder();

        header("HTTP/1.1 301 Moved Permanently");
	    header("Location: " + $DOMAIN + $FOLDER);
	    exit();
    }
}