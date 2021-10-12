<?php

include_once 'private/classes/Domain.php';

class Job {

    private $id;
    private $name;
    private $imageLink;
    private $smallImageLink;
    private $description;
    private $githubLink;
    private $demoLink;

    function __construct($id, $name, $imageLink, $smallImageLink, $description, $githubLink, $demoLink){
        $this->setId($id);
        $this->setName($name);
        $this->setImageLink($imageLink);
        $this->setSmallImageLink($smallImageLink);
        $this->setDescription($description);
        $this->setGithubLink($githubLink);
        $this->setDemoLink($demoLink);
    }

    private function setId($id){
        $this->id = $id;
    }

    private function setName($name){
        $this->name = $name;
    }

    private function setImageLink($imageLink){
        $this->imageLink = $imageLink;
    }

    private function setSmallImageLink($smallImageLink){
        $this->smallImageLink = $smallImageLink;
    }

    private function setDescription($description){
        if(isOnline()){
            $this->description = utf8_encode($description);//fixes weird ? online bug for words like é
        }
        else{
            $this->description = $description;
        }        
    }

    private function setGithubLink($githubLink){
        $this->githubLink = $githubLink;
    }

    private function setDemoLink($demoLink){
        $this->demoLink = $demoLink;
    }

    private function getId(){
        return $this->id;
    }

    function getName(){
        return $this->name;
    }

    function getImageLink(){
        return $this->imageLink;
    }

    function getSmallImageLink(){
        if(is_null($this->smallImageLink)){
            return $this->imageLink;
        }
        
        return $this->smallImageLink;
    }

    function getDescription(){
        return $this->description;
    }

    function getGithubLink(){
        return $this->githubLink;
    }

    function getDemoLink(){
        return $this->demoLink;
    }
}