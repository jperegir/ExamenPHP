<?php


class Rating extends Connection
{

    private $workers = [];

    function __construct()
    {
        parent::__construct();
    }

    // WIP 0.5pto
    function getAllWorkers()
    {
        $sql = "SELECT * FROM worker;";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        /* echo "<pre>";
        print_r($result);
        echo "</pre>"; */
        foreach ($result as $clave => $worker) {
            /* echo "<pre>";
            print_r($worker);
            echo "</pre>";
            echo "<br>"; */
            array_push($this->workers, new Worker(
                $worker['ID'],
                $worker['NAME'],
                $worker['EMAIL'],
                $worker['COUNTRY'],
                $worker['ABOUT'],
                $worker['SALARY'],
                $worker['PICTURE'],
                $worker['RATING']
            ));
        }
    }

    // WIP 0.5pto
    function getWorker($id)
    {
        $sql = "SELECT * FROM worker WHERE ID = :id;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $workerData = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Worker(
                $workerData['ID'],
                $workerData['NAME'],
                $workerData['EMAIL'],
                $workerData['COUNTRY'],
                $workerData['ABOUT'],
                $workerData['SALARY'],
                $workerData['PICTURE'],
                $workerData['RATING']
            );
        }
    }

    // WIP 1pto
    function drawWorkersList()
    {
        $output = "";
        foreach ($this->workers as $client) {
            $output .= "<tr>";
            $output .= "    <td>" . $client->getId() . "</td>";
            $output .= "    <td><a href='detalle.php?id=" . $client->getId() . "'>" . $client->getCompany() . "</a></td>";
            $output .= "    <td>" . number_format(intval($client->getInvestment()), 2, "'", ".") . " €</td>";
            $output .= "    <td>" . date("F d, Y", strtotime($client->getDate())) . "</td>";
            $output .= "    <td>";
            $output .= ($client->getActive()) ?
                "<img src='img/img05.gif'>" :
                "<img src='img/img06.gif'>";
            $output .= "    </td>";
            $output .=     "<td><a href='delete.php?id=" . $client->getId() . "'><img src='img/del_icon.png' width='25'></a></td>";
            $output .=     "<td><a href='edit.php?id=" . $client->getId() . "'><img src='img/edit_icon.png' width='25'></a></td>";
            $output .= "</tr>";
        }
        return $output;
    }

    // WIP 1pto
    function drawRating($id, $rating)
    {
    }

    // WIP 1pto
    function ratingUpdate($id, $rating)
    {
        $sql = "UPDATE worker SET RATING = :rating WHERE ID = :id;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':rating', $rating);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount();
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



    /* GETTTERS */
    function getWorkers()
    {
        return $this->workers;
    }
}
