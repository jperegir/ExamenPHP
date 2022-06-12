<?php 

class Worker{

    private $name;
    private $email;
    private $country;
    private $about;
    private $salary;
    private $picture;
    private $rating;

    function __construct($id, $name, $email, $country, $about, $salary, $picture, $rating){

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->country = $country;
        $this->about = $about;
        $this->salary = $salary;
        $this->picture = $picture;
        $this->rating = $rating;

    }

    /* GETTER */


    /* SETTER */
    function setId($id){
        $this->id = $id;
    }
    function setName($name){
        $this->name = $name;
    }
    function setEmil($email){
        $this->email = $email;
    }
    function setCountry($country){
        $this->country = $country;
    }
    function setAbout($about){
        $this->about = $about;
    }
    function setSalary($salary){
        $this->salary = $salary;
    }
    function setPicture($picture){
        $this->picture = $picture;
    }
}