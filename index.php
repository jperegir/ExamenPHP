<?php 
require_once("./autoload.php");

$worker = new Worker(1);

$rating = new Rating();

/* $rating->getAllWorkers();
print_r($rating->getWorkers()); */

// print_r($rating->getWorker(1));

/* echo "<pre>";
print_r($worker->getSkillsList(4));
echo "</pre>"; */

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Employee Monthly Rating - Chips&Bits Inc.</title>
</head>

<body>


  <div class="content">

    <div class="container">
      <h2 class="mb-5">Employee Monthly Rating - Chips&Bits Inc.</h2>


      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">&nbsp;</th>
              <th scope="col">Name</th>
              <th scope="col">Skills</th>
              <th scope="col">Rating</th>
              <th scope="col">&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <!-- <tr scope='row'>
              <td> <img src='img/photo/hop1.jpg' width='50'> </td>
              <td>Hopper, Xavier P.</td>
              <td> Frontend <small class='d-block'>Sed diam lorem, auctor quis, tristique ac, eleifen...</small> </td>
              <td>
                <div class='rating_container'> <a href='ratingUpdate.php?id=1&rating=1'><img src='img/star_up.png'
                      width='10'></a><a href='ratingUpdate.php?id=1&rating=2'><img src='img/star_up.png'
                      width='10'></a><a href='ratingUpdate.php?id=1&rating=3'><img src='img/star_up.png'
                      width='10'></a><a href='ratingUpdate.php?id=1&rating=4'><img src='img/star_down.png'
                      width='10'></a><a href='ratingUpdate.php?id=1&rating=5'><img src='img/star_down.png'
                      width='10'></a> </div>
              </td>
              <td><a href='card.php?id=1' class='more'>+Info</a></td>
            </tr> -->
            <?php 
            $rating->getAllWorkers();
           /*  echo "<pre>";
            print_r($rating->getWorkers());
            echo "</pre>"; */
            print_r($rating->drawWorkersList()); 
            ?>  
          </tbody>
        </table>
      </div>


    </div>

  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>