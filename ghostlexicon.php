<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="author" content="Samuel Weißmayr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Samuel Weißmayr">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="source/sighting.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Raleway&display=swap" rel="stylesheet">
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Sightings</title>
  </head>
  <body class="snowNight">

        <!--MainContainer with transparent Background-->
      <div class="container-fluid container1">
        <h1 class="heading align-self-center mid">Ghosts</h1><br>

        <div class="container-fluid">
          <?php
             //get data from Form and Select Data from Database
              $sight_kind = $_POST['sight_kind'];
              $con = mysqli_connect("", "root", "", "ghostbusters");
              $sql = "SELECT sight_location,sight_kind,sight_description   FROM sighting WHERE sight_kind='$sight_kind'";
              $res = mysqli_query($con,$sql);
              $num = mysqli_num_rows($res);
              if($num > 0) echo "Ihre Ergebnisse:<br>";
              else echo "Leider hat noch keiner ein Rezept in dem Bereich hochgeladen<br>";
              while ($dsatz = mysqli_fetch_assoc($res))
              echo "<br>"."<div class='container-fluid clark'>"."Kind: ".$dsatz["sight_kind"] . "<br>" . "Location: " .$dsatz["sight_location"]."<br>" . "<br>"."Description:<br>". wordwrap($dsatz["sight_description"],100,"<br>\n",FALSE)."</div>";


              mysqli_close($con);
          ?>
        </div>
        <div class="col text-center">
          <br><a href="ghostlexicon.html"><button type="submit" class="btn btn-danger"> <span class="centeredbtn">Zurück zur Auswahl</span></button><a><br>
        </div>
      </div>
      <hidden><embed name="myMusic" loop="true" hidden="true" volume="0.5" src="./source/img/music.mp3" ></embed></hidden>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
