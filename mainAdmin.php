<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuzzWork</title>
    <link rel="icon" href="images/bee.png">
    <link rel="stylesheet" href="mainStyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <section>
      <header>
        <img src="images/buzz2.png" width="200px" />
        <div class="navigation">
          <a href="#">Home</a>
          <a href="usersAdmin.php">Admin Database</a>
          <a href="creatorsCards.php">Creators</a>
          <a href="catalog.php">Posts</a>
          <div class="dropdown-menu">
            <a href="usersSignUp.php">Account</a>
                <div class="dropdown-list-container">
                  <div class="dropdown-list-content">
                    <a href="usersSignUp.php">Users</a>
                    <a href="creatorsSignUp.php">Creator</a>
                    <a href="adminLogin.php">Admin</a>
                  </div>
                </div>
          </div>
          

        </div>
      </header>
      <div class="content">
        <div class="info">
          <h2>Like Nature <br /><span>Be Creative!</span></h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur.
          </p>
          <a href="#" class="info-btn">More Info</a>
        </div>
      </div>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />

      <div class="allCards">
        <h1>Services Offered</h1>
        <div class="cards">
          <img src="images/programming.jpg" class="image" />
          <div class="title">
            <h1>Programming</h1>
          </div>
          <a class="cardButton1" href="skillCard.php?a=<?php echo "Programmer"; ?>">Learn More</a>
        </div>

        <div class="cards">
          <img src="images/cam.jpg" class="image" />
          <div class="title">
            <h1>Photography</h1>
          </div>
          <a class="cardButton1" href="skillCard.php?a=<?php echo "Photographer"; ?>">Learn More</a>
        </div>

        <div class="cards">
          <img src="images/digiart.jpg" class="image" />
          <div class="title">
            <h1>Digital Arts</h1>
          </div>
          <a class="cardButton1" href="skillCard.php?a=<?php echo "Digital Art"; ?>">Learn More</a>
        </div>
        <div class="cards">
          <img src="images/gaming.jpg" class="image" />
          <div class="title">
            <h1>Game Pilot</h1>
          </div>
          <a class="cardButton1" href="skillCard.php?a=<?php echo "Game Pilot"; ?>">Learn More</a>
        </div>
      </div>
      <br />
      <br />
      <br />
      <br />
      <br />
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </section>
  </body>
</html>
