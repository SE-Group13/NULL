<?php
session_start();
//this section here deals with the upload of the users image into the petimages folder

$petImagesPath ='Images\PetImages\\';

//the first two if statements make sure there are no errors when the image was uploaded 
if (isset($_FILES['jobImage'])) {
    if($_FILES['jobImage']['error'] === 0){
   

    $imageName = explode('.',$_FILES['jobImage']['name']);
    $imageExt = end($imageName);
    $newId =uniqid().'.'.$imageExt;
    $newImageAddress = $petImagesPath.$newId; 

    move_uploaded_file($_FILES['jobImage']['tmp_name'],$newImageAddress);

    }
} else {
    $image = 'image was not pulled'; // or some default value
}

$data =  json_decode( file_get_contents('Data\jobs.json', true));
$count = count($data);

$_SESSION['data'] = [
    "id" => $count,
    "title" => $_POST["jobTitle"],
    "description" => $_POST["jobDiscription"],
    "pet_type"=> $_POST["petType"],
    "city" => $_POST["city"],
    "neighbourhood" => $_POST["neighbourhood"],
    "date" => $_POST["date"],
    "budget"=> $_POST['deposit'],
    "image"=>$newId,
];
?>
<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="CSS/design.css" />
	<link rel="stylesheet" href="CSS/reviewJob.css" />
	<title>reviewJob</title>
</head>

<body>
    <?php include ROOT . "/PHP Scripts/header.php" ?>
    <div class="container content">
        <header class="intro">
            <h1>Review Job Details</h1>
            <h2>This is how your job information looks.</h2>
        </header>
    
        <div class="job-detail-container">
            <?php
                // Build the image file path
                $image_path = "Images/PetImages/" .  $_SESSION['data']['image'];

                // Display the job details
                echo '<div class="job-details">';
                echo '<h2 class="job-title">' . $_SESSION['data']['title'] . '</h2>';
                echo '<p>' . $_SESSION['data']['description'] . '</p>';
                echo '<p>Pet type: ' . $_SESSION['data']['pet_type'] . '</p>';
                echo '<p>City: ' . $_SESSION['data']['city'] . '</p>';
                echo '<p>Neighbourhood: ' . $_SESSION['data']['neighbourhood'] . '</p>';
                echo '<p>Date: ' . date('d F Y', strtotime(substr($_SESSION['data']['date'], 0, 10))) . '</p>';
                echo '<p>Budget: ' . $_SESSION['data']['budget'] . '£' . '</p>';
                echo '</div>';
                echo '<img class="pet-image-bigger" src="' . $image_path . '" alt="Pet Image">';
            ?>
        </div>
        <form action="PHP Scripts\processPayment.php" method="post">
            <button onclick="history.back()" type="button" class="edit">Edit</button>
            <button type="submit" class="submit">Submit and pay with PayPal</button>
            <?php
                echo '<input type="hidden" id="price" name="price" value="' . $_SESSION['data']['budget'] . '">';
                echo '<input type="hidden" id="description" name="description" value="' . $_SESSION['data']['description'] . '">';
                echo '<input type="hidden" id="jobName" name="jobName" value="' . $_SESSION['data']['title'] . '">';
            ?>
        </form>
    </div>
    <?php include ROOT . "/PHP Scripts/footer.php" ?>
</body>