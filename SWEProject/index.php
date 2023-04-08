<?php 
    include ("path.php");                       // Sets a base path to the root
    require (ROOT . "/dynamicHeaderTest.php");              // Used to test account features

    // print_r($_SESSION);
    // echo("<br>")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Minder App</title>

        <link href='https://fonts.googleapis.com/css?family=Zen Kaku Gothic Antique' rel='stylesheet'> <!--Imports a Google Font-->
        <link rel="stylesheet" href="CSS/design.css">
    </head>

    <body>
        <?php include_once(ROOT . '/PHP Scripts/header.php') ?>

        <div class = "container content">
            <div class = "homeBoxWrapper">
                <div class = "homeBox">
                    <p class = "h1"> Find loving, reliable minders for your furry family </p>
                    <p class = "h2"> Book trusted services and care. </p>
                    <hr>

                    <button type = "button" onClick="window.location.href='loginPage.php'"> Log in </button>
                    <button type="button" onClick="window.location.href='register.php'">Register</button>
                </div>
                <img src="Images/indexPhotos/homeBoxPhotos/trustpilot_v2.svg" alt="">
            </div>
    
            <div class = "howItWorksWrapper">           
                <p class = "h1 p-1 bold"> Here's how it Works </p>
                
                <div class = "columnWrapper">
                    <div class = "column">
                        <figure class = "icon">
                            <img src="Images/indexPhotos/howItWorksIcons/addIcon.svg" alt="">
                        </figure>

                        <p class = "text"> 
                            1. Create a Job Post tailored exactly to what you want, when you want.
                        </p>
                    </div>

                    <div class = "vertical"></div>
                    
                    <div class = "column">
                        <figure class = "icon">
                            <img src="Images/indexPhotos/howItWorksIcons/payIcon.svg" alt="">
                        </figure>

                        <p class = "text">
                            2. Pay the deposit of your Job post and wait for qualified minders to show interest.
                        </p>
                    </div>

                    <div class = "vertical"></div>

                    <div class = "column">
                        <figure class = "icon">
                            <img src="Images/indexPhotos/howItWorksIcons/doneIcon.svg" alt="">
                        </figure>

                        <p class = "text">
                            3. Accept a minder to take the job and done!
                        </p>
                    </div>
                </div>
                
            </div>

            <div class = "testimoniesWrapper">
                <p class = "h1 p-1 bold"> Hear from our Satisfied Customers! </p>

                <div class = "columnWrapper">
                    <div class = "testimony">
                        <figure class = "headshot">
                            <img src="Images/indexPhotos/testimoniesPhotos/headshot1.jpg" alt="">
                            <label for=""> James Keach </label>
                        </figure>

                        <div class = "vertical"></div>

                        <p class = "review"> 
                            We were very nervous using a house sitter for the first time especially as we have a ‘broken’ rescue dog that’s very scared. 
                            However after meeting Julie-Ann and Nick, we felt reassured and confident enough to enjoy our holiday break. 
                            Absolutely no regrets. The dogs loved them and we were kept updated often. Highly recommended.
                            <br><br>
                            - 12/05/2022 [5*]
                        </p>

                        
                    </div>

                    <div class = "testimony">
                        <figure class = "headshot">
                            <img src="Images/indexPhotos/testimoniesPhotos/headshot2.jpg" alt="">
                            <label for=""> Amy Sanchez </label>
                        </figure>

                        <div class = "vertical"></div>

                        <p class = "review"> 
                            Extremely professional, always on top of everything. Very accurate in administering meds to our pups and she even performed some 
                            extra house cleaning after them. We are very happy we could count with Jennie's help during our trip to Italy. 
                            Thanks to her we managed to enjoy without worrying for our dogs.
                            <br><br>
                            - 29/03/2022 [4.5*]
                        </p>
                    </div>

                    <div class = "testimony">
                        <figure class = "headshot">
                            <img src="Images/indexPhotos/testimoniesPhotos/headshot3.jpg" alt="">
                            <label for=""> Martha Reid </label>
                        </figure>

                        <div class = "vertical"></div>

                        <p class = "review"> 
                            Louise was excellent at making sure our kitties got the attention and care they needed twice daily while we were away. 
                            Louise also went the extra mile in letting us know about some cheeky construction workers making a mess in front of our house- 
                            which provided us the opportunity to address the matter with our neighbors in a timely fashion, preventing damage to our property. 
                            Highly recommend. Thank you, Louise!
                            <br><br>
                            - 17/09/2022 [5*]
                        </p>
                    </div>
                </div>
            </div>

            <div class = "servicesWrapper">
                <!-- <p class = "h1 p-1 bold"> Services we support: </p> -->

                <div class = "columnWrapper">
                    <div class = "column"> 
                        <p class = "h1 p-1 bold"> <u> Services we Support: </u> </p>

                        <div class = "serviceInfo">
                            <figure class = "icon">
                                <img src="Images/indexPhotos/servicesPhotos/dogWalk.png" alt="">
                            </figure>

                            <p class = "description">
                                <span class = "bold"> Dog Walking <br> </span> 
                                Your dog gets a healthy walk, rain or shine either around the neighbourhood
                                Great for when you can't take the dog out or particularly tiring days.
                            </p>
                        </div>

                        <div class = "serviceInfo">
                            <figure class = "icon">
                                <img src="Images/indexPhotos/servicesPhotos/dogBoarding.png" alt="">
                            </figure>

                            <p class = "description">
                                <span class = "bold"> Dog Boarding <br> </span> 
                                Overnight care is provided for your pets at your dog minders home. A nice
                                comfortable environment, perfect for time away from home. 
                            </p>
                        </div>

                        <div class = "serviceInfo">
                            <figure class = "icon">
                                <img src="Images/indexPhotos/servicesPhotos/homeMinding.png" alt="">
                            </figure>

                            <p class = "description">
                                <span class = "bold"> Home Minding <br> </span> 
                                Your minder pops over to take care of your pets and your home. Your pets
                                have a familiar environment to relax and so can you with your home safe.
                            </p>
                        </div>

                        <div class = "serviceInfo">
                            <figure class = "icon">
                                <img src="Images/indexPhotos/servicesPhotos/dropIn.png" alt="">
                            </figure>

                            <p class = "description">
                                <span class = "bold"> Drop-In Visits <br> </span> 
                                Your minder stops by your home to play with, care for and clean your pets.
                                A quick, easy way to make sure your pets always get the care the deserve.
                            </p>
                        </div>

                        <div class = "serviceInfo">
                            <figure class = "icon">
                                <img src="Images/indexPhotos/servicesPhotos/dogDayCare.png" alt="">
                            </figure>

                            <p class = "description">
                                <span class = "bold"> Day Care <br> </span> 
                                Your pets pay a day visit to your sitter's home to get some quality care.
                                Drop them off in the morning and pick them up in the evening.
                            </p>
                        </div>
                    </div>

                    <div class = "column">
                        <p class = "h1 p-1 bold"> <u> Why choose us? </u> </p>
                        <p class = "whyChooseUs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Aliquam faucibus purus in massa. Non odio euismod lacinia at quis risus sed vulputate odio. 
                            Vel quam elementum pulvinar etiam. Ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once (ROOT . '/PHP Scripts/footer.php') ?> <!-- Footer is always the same -->
    </body>
</html>
