<?php
class Job {

    private $id;
    private $name;
    private $imageLink;
    private $smallImageLink;
    private $description;
    private $githubLink;
    private $demoLink;

    function __construct($id, $name, $imageLink, $smallImageLink, $description, $githubLink, $demoLink){
        $this->id = $id;
        $this->name = $name;
        $this->imageLink = $imageLink;
        $this->smallImageLink = $smallImageLink;
        $this->description = $description;
        $this->githubLink = $githubLink;
        $this->demoLink = $demoLink;
    }

    function getId(){
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