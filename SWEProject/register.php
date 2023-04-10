<?php 
    include ("path.php");                       // Sets a base path to the root
    require (ROOT . "/login.php");              // Used to test account features
    require ("register.class.php");



    if (isset($_POST['submit'])) {
        $secret = "6LfhVGolAAAAAD1fl_oTheqPkrzgm6lbXgM8fe-e";
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
        $data = file_get_contents($url);
        $row = json_decode($data, true);

        $user = new RegisterUser($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['dob'], $_POST['gender'], $_POST['usertype'], $_POST['pettype'], $_POST['petname'], $_POST['petage']);

       
        
        
      }


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
        <link rel="stylesheet" href="CSS/register.css">
        <!-- Captcha API -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script defer src="JS/choosePet.js"></script>
    </head>

    <body>
        <?php include_once(ROOT . '/PHP Scripts/header.php') ?>

        <div class = "container content">
            <div class = "homeBoxWrapper">
                <div class = "homeBox">
                            <h1 class = "signup" >Sign Up</h1><br>



                <form action="" method="post">
                <hr class = "line">
                    <div class="radio-group" name = "usertype">
                        <p> Please select whether you will be using the site as a Pet Sitter or Pet Owner </p><br>
                        <input type="radio" id="pet-sitter" name="usertype" value="pet-sitter" checked>
                        <label for="pet-sitter">Pet Sitter</label>
                        <input type="radio" id="pet-owner" name="usertype" value="pet-owner">
                        <label class = "owner" for="pet-owner">Pet Owner</label>
                    </div><br>


                    <label for="name">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required><br>

                    <label for="name">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required><br>

                    <label for="name">Username:</label>
                    <input type="text" id="uname" name="username" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="date-of-birth">Date of Birth:</label>
                    <input type="date" id="date-of-birth" name="dob" required><br>


                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="">Please select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select><br>

                    


                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>


                    
                    <label for="document">Upload Passport Photo:</label>
                    <input type="file" name="document" id="document">
                    <p> Why do we ask for this?</p>
                    <p> We must verify that everyone who uses our service is who they say they are, for the safety of all users across the platform</p>
                    <br>
                    <br>



                    <div id="pet-type-dropdown" style="display: none;">
                    <h1> As a Pet Owner, we need each Owner to add at least one pet when signing up! </h1>
                    <h1> Don't worry, you'll be able to add more pets when your account is created!</h1>
                        <label for="pet-type">Pet Type:</label>
                        <select id="pet-type" name="pettype">
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                        </select>


                        <label for="name">Pet Name:</label>
                        <input type="text" id="petname" name="petname" value ="Enter the name of your pet" required><br>

                        
                        <label for="age">Pet Age:</label>
                        <input type="text" id="petage" name="petage" value ="0" required pattern="[0-9]+"><br>
                    </div><br>





                    <form method="post" class="container">
                        <br>
                        <div class="row">
                        <div class="g-recaptcha" data-sitekey="6LfhVGolAAAAAKtKLSemG4Hoouokf5MtHevX_FgA"></div>
                        </div>
                        <br>
                        <button class="btn wave-effect wave-light" type="submit" name="submit">REGISTER</button>
                    </form>
                    </div>

                    <p class = "error"><?php echo @$user->error ?></p>
                    <p class = "success"><?php echo @$user->success ?></p>
  
                    </form>


                </div>
                    <img src="Images/indexPhotos/homeBoxPhotos/trustpilot_v2.svg" alt="">
                </div>
    
            

            
                </div>
            </div>
        </div>

        <?php include_once (ROOT . '/PHP Scripts/footer.php') ?> <!-- Footer is always the same -->
    </body>
</html>

