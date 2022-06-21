<?php


class Rating extends Connection
{

    private $workers = [];

    function __construct()
    {
        parent::__construct();
    }

    /* GETTTERS */
    function getWorkers()
    {
        return $this->workers;
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
        foreach ($this->workers as $worker) {
            $output .= "<td> <img src='img/photo/".$worker->getPicture()."' width='50'> </td>";
            $output .= "<td>".$worker->getName()."</td>";
            $output .= "<td> Frontend <small class='d-block'>".$worker->getAbout()."</small> </td>";
            $output .= "<td>";
            $output .= "<div class='rating_container'> <a href='ratingUpdate.php?id=".$worker->getId()."&rating=1'><img src='img/star_up.png'";
            $output .= "width='10'></a><a href='ratingUpdate.php?id=".$worker->getId()."&rating=2'><img src='img/star_up.png'";
            $output .= "width='10'></a><a href='ratingUpdate.php?id=".$worker->getId()."&rating=3'><img src='img/star_up.png'";
            $output .= "width='10'></a><a href='ratingUpdate.php?id=".$worker->getId()."&rating=4'><img src='img/star_down.png'";
            $output .= "width='10'></a><a href='ratingUpdate.php?id=".$worker->getId()."&rating=5'><img src='img/star_down.png'";
            $output .= "width='10'></a> </div>";
            $output .= "</td>";
            $output .= "<td><a href='card.php?id=".$worker->getId()."' class='more'>+Info</a></td>";
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

}
