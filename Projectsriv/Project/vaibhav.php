<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWIPE</title>
    <link rel="stylesheet" href="swipe.css">
</head>



<body class="swipe">
    <div class="swipe_card">
        <div id="swipe_img">
            <?php 
           echo "<img id="swipeimg" src="https://source.unsplash.com/random?male" alt="">" ;
            ?>
            
            
            
        </div>

        <div class="swipe_about">
            <style>
                html {
                    scroll-behavior: smooth;
                }
            </style>
            <div id="nameAge" class="swipe_section">
                <h1 id="name_age"></h1>

            </div>



            <section id="bio" class="swipe_section">
                <h1>My Interest</h1>
                <h3 id="interest">I love listening music</h3>
            </section>

            <section id="location" class="swipe_section">
                <h2 class="location">Location</h2>
                <h3 id="city"> </h3>


            </section>


        </div>


    </div>


    <!-- <div class="swipe_choose">
        <div class="swipe_button">
            <img src="check.png" alt="">
        </div>
        <div class="swipe_button">
            <img src="star.png" alt="">
        </div>
        <div class="swipe_button">
            <img src="delete.png" alt="">
        </div>

    </div> -->

    <div class="swipe_choose">
        <div class="swipe_buttons">
            <img onclick="check()" src="check.png" alt="" id="check" class="swipebutton">
            <img onclick="check()" class="swipe_star" src="star.png" alt="" class="swipebutton">
            <img onclick="check()" src="delete.png" alt="" class="swipebutton">
        </div>
    </div>
    <script src="script.js"></script>
    

    



</body>


</html>