<?php 






if($_SERVER['REQUEST_METHOD'] == 'GET'){
$name = $_GET["numA"];
$score = $_GET["numB"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "quiz";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "INSERT INTO `register` (`Name`, `Score`) VALUES ('$name',$score)";
$result = mysqli_query($conn, $sql);
}
echo'<!DOCTYPE html>
<html lang="En">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Vivek and Vatsal">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Quiz</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div id="page-quiz">
    <section class="quiz-init">
      <form class="player-form" action="index.php" method="post">
        <input type="text" name="name" id="name" class="player-name">
        <button class="btn-submit" type="submit">To start</button>
      </form>
    </section>

    <section class="quiz-game set-none">
      <header class="header-datas">
        <p class="greetings"></p>
      </header>
      <section class="questions-and-answers"></section>
      <footer class="footer-datas">
        <p class="questions-counter"></p>
        <button class="btn-next">Next</button>
      </footer>
    </section>

    <section class="quiz-congratulations set-none">
      <img src="./images/trophy.svg" alt="trphy">
      <h1>You completed the quiz!</h1>
      <h2 class="quiz-result"></h2>
    </section>
  </div>
  <script src="./script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>';



?>