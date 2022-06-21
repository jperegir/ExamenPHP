<?php 

class Worker{

    private $name;
    private $email;
    private $country;
    private $about;
    private $salary;
    private $picture;
    private $rating;

    function __construct($id, $name="", $email="", $country="", $about="", $salary="", $picture="", $rating=""){

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
    function getId(){
        return $this->id;
    }
    
    function getName(){
        return $this->name;
    }

    function getEmail(){
        return $this->email;
    }

    function getCountry(){
        return $this->country;
    }

    function getAbout(){
        return $this->about;
    }

    function getSalary(){
        return $this->salary;
    }

    function getPicture(){
        return $this->picture;
    }

    function getRating(){
        return $this->rating;
    }

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

    function setRating($rating){
        $this->rating = $rating;
    }

    // WIP 1pto
    function getSkillsList($id)
    {
        $sql = "SELECT w.ID, w.NAME, s.SKILL FROM worker AS w
        LEFT JOIN skills_worker AS sw ON w.ID = sw.id_worker
        LEFT JOIN SKILLS AS s ON sw.id_skills = s.ID
        WHERE w.ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $skillsWorker = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $skillsWorker;
        }
    }

    // WIP 1pto
    function getLanguageList($id)
    {
        $sql = "SELECT w.ID, w.NAME, l.language, l.icon FROM worker AS w
        LEFT JOIN language_worker AS lw ON w.ID = lw.id_worker
        LEFT JOIN language AS l ON lw.id_language = l.ID
        WHERE w.ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $languageWorker = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $languageWorker;
        }
    }

    // WIP 1pto
    function getCountryName($id)
    {
        $sql = "SELECT c.country FROM worker AS w
        LEFT JOIN country AS c ON w.COUNTRY = c.ID
        WHERE w.ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $countryName = $stmt->fetchColumn();
        return $countryName;
    }
}