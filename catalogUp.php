<?php   
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuzzWork: Posts</title>
    <link rel="icon" href="images/bee.png">

    <link rel="stylesheet" href="catalog.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
</head>
<body>
   
<div class="main">

    <!-- HEADER SECTION -->

    <!-- MAIN BODY SECTION -->
    <div class="mainbody-container">
        <div class="mainbody">
            <!-- SIDE NAVIGATION -->
            <div class="side-nav">
                <div class="side-nav-icon">
                    <img src="images/bee_icon.png" class="icon" alt="buzzwork_icon">
                </div>

                <div class="list-style nav-divider"></div>

                <div class="side-nav-lists">
                    
                    <div class="list-style nav-home">
                        <a href="main.php" target="_blank"><img src="images/home-3-512.png" >Home</a></img> 
                    </div>
                    <div class="list-style nav-creators">
                        <a href="#"><img src="images/user-4-512.png">My Account</a></img> 
                    </div>
                    <div class="list-style nav-create-post">
                        <a href="#" onclick="toggleForm()"><img src="images/beeswax-2-512.png">Create Post</a></img> 
                    </div>
                    <div class="list-style nav-account">
                        <a href="#"><img src="images/home-3-512.png">Account</a></img> 
                    </div>
                </div>       
            <!-- MAIN LISTING  -->
            </div>
            <div class="main-posts">
                <div class="flex-item main-listing-posts">
                    <div class="flex-item posts-container">
                        <div class="flex-item posts-header">
                            <img src="images/Prof2.jpg" alt="worker-picture" class="worker-pfp">
                            <p>Ervin Bautista</p>
                            <div class="content-bgbee"><img src="images/781454.png" class="content-bgbee"></div>
                        </div>
                        <div class="flex-item posts-content">
                            <p>I will edit and retouch your photos in a cheap price!
                            </p>
                            
                        </div>
                        <div class="flex-item posts-footer">
                            <p>₱500 - ₱750</p>
                            <button class="button contact-button">Order Service</button>
                        </div>
                        <div class="flex-item posts-highlight">
                            
                        </div>
                    </div>
                    <div class="flex-item posts-container">
                        <div class="flex-item posts-header">
                            <img src="images/Prof1.png" alt="worker-picture" class="worker-pfp">
                            <p>Andy Medina</p>
                            <div class="content-bgbee"><img src="images/781454.png" class="content-bgbee"></div>
                        </div>
                        <div class="flex-item posts-content">
                            <p>I will pilot your league of legends account! Price varies depending on how many levels
                                I should do. I also offer piloting your DOTA 2 account and Mobile Legends account
                            </p>
                            
                        </div>
                        <div class="flex-item posts-footer">
                            <p>₱500 - ₱1000</p>
                            <button class="button contact-button">Order Service</button>
                        </div>
                        <div class="flex-item posts-highlight">
                            <img src="images/Prev3.jpg" class="highlight-pic">
                        </div>
                    </div>
                    <div class="flex-item posts-container">
                        <div class="flex-item posts-header">
                            <img src="images/Prof2.jpg" alt="worker-picture" class="worker-pfp">
                            <p>Ervin Bautista</p>
                            <div class="content-bgbee"><img src="images/781454.png" class="content-bgbee"></div>
                        </div>
                        <div class="flex-item posts-content">
                            <p>I will edit your video with the utmost quality and flavor. You can add your touch in the video that will be edited
                                Contact me now to make your ideas to reality! 
                            </p>
                            
                        </div>
                        <div class="flex-item posts-footer">
                            <p>₱750 - ₱1500</p>
                            <button class="button contact-button">Order Service</button>
                        </div>
                        <div class="flex-item posts-highlight">
                            <img src="images/Prev1.jpg" class="highlight-pic">
                            <img src="images/Prev2.jpg" class="highlight-pic">
                        </div>
                    </div>
                    <div class="flex-item posts-container">
                        <div class="flex-item posts-header">
                            <img src="images/Prof2.jpg" alt="worker-picture" class="worker-pfp">
                            <p>Ervin Bautista</p>
                            <div class="content-bgbee"><img src="images/781454.png" class="content-bgbee"></div>
                        </div>
                        <div class="flex-item posts-content">
                            <p>I’ll provide you with the best video editing solution and turn your raw footage into an engaging video that will tell your story. I can do video editing for YouTube, FB, IG, or whatever you want. You Name It, I Do It!
                            </p>
                            
                        </div>
                        <div class="flex-item posts-footer">
                            <p>₱750 - ₱1500</p>
                            <button class="button contact-button">Order Service</button>
                        </div>
                        <div class="flex-item posts-highlight">
                            <img src="images/Prev4.jpg" class="highlight-pic">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- CREATE POST OVERLAY -->
    <script>
        function toggleForm(){
        document.body.classList.toggle('activeForm');
        }

    </script>
    <div class="overlay-form">
        <div class="close-btn" onclick="toggleForm()">&times;</div>
            <h1>Create a Post! 🐝</h1>
            <p>Start making money now and share your talents!</p>
        <div class="form-element">
            <label for="fullname">Category</label>
            <input type="text" id="fullname">
        </div>
        <div class="form-element">
            <label for="email">Description</label>
            <input type="email" id="email">
        </div>
        <div class="form-element">
            <label for="password-1">Min Price</label>
            <input type="password" id="password-1">
        </div>
        <div class="form-element">
            <label for="password-2">Max Price</label>
            <input type="password" id="password-2">
        </div>
        <div class="form-element">
            <button>POST!</button>
        </div>
        </div>


    <!-- <div class="footer-container">
        <div class="footer-content-conatiner">

        </div>
    </div> -->

</body>
</html>