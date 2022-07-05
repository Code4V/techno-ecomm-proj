<?php
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="about.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="images/bee.png">
    <title>Contacts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body id="bodyID">
    <div class="menuBar">
      <a href="main.php"><img class="icon" src="images/buzz2.png" /></a>
      <label>
        <input type="checkbox" onclick="myFunction()" />
        <span class="check"></span>
      </label>
    </div>
    <div class="title">
      <h1 id="title">Developers Info</h1>
    </div>
    <div class="cards">
      <div class="card">
        <div class="card-img card-img1"></div>
        <div class="card-body">
          <h3>Ervin Bautista</h3>
          <span>Web developer</span>
          <p>
            I'm currently a 3rd year college student at PUP. I love playing
            video games with my friends specially Valorant. I also love coding
            and hate research. :)
          </p>
          <a href="https://www.facebook.com/Bautista.Ervin"
            ><i class="fa fa-facebook" style="font-size: 24px"></i
          ></a>
          <i
            class="fa fa-twitter"
            style="font-size: 24px; padding-left: 10px"
          ></i>
        </div>
      </div>

      <div class="card">
        <div class="card-img card-img2"></div>
        <div class="card-body">
          <h3>Jeanne Francis Rivas</h3>
          <span>Web developer</span>
          <p>
            A 3rd year college student at PUP that loves to play games and
            develop creative ideas. Like my partner Ervin, research is also not
            my strongest suite
          </p>
          <a href="https://www.facebook.com/vashrivas"
            ><i class="fa fa-facebook" style="font-size: 24px"></i
          ></a>
          <i
            class="fa fa-twitter"
            style="font-size: 24px; padding-left: 10px"
          ></i>
        </div>
      </div>
    </div>

    <script>
      //Dark Mode
      function myFunction() {
        document.body.classList.toggle("darkMode");
      }
    </script>
  </body>
</html>
