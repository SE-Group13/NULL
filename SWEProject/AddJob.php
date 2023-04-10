<?php include("path.php") ?>
<?php include(ROOT . "/PHP Scripts/filter_jobs.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="CSS/design.css" />
	<link rel="stylesheet" href="CSS/AddJob.css" />
	<title>Post Jobs</title>
</head>

<body>
	<?php include ROOT . "/PHP Scripts/header.php" ?>
	
	<div class="container content cont">
		<div class="intro">
			<h1 class="title">Post A New Job</h1>
			<h2 class="subtitle">Create A New Job Posting For One Of Our Many Pet-Minders</h2>
		</div>

        <div>
			<form class = 'form' method="POST" action ="./PHP Scripts/moveToPayment.php" enctype="multipart/form-data">
				<label class = 'center'> Create Posting </label>

				<label class = "label">Title of Job Posting</label>
				<input class ='inputtitle' required type="text" name = "jobTitle" style="font-size: 20px;" maxlength="50" minlength="10"></input>

				<label class = "label">Discription of Job</label> 
				<input class ='inputdiscription' required type="text" name = "jobDiscription" minlength="10" style="font-size: 20px;"></input>

				<label class = 'label' > What type of pet is this for   </label>
				
				<br>	
				<select class ='petType' name="petType" required type="" >
				<option value="cat"> Cat</option>
				<option value="dog"> Dog</option>
				<option value="cat and dog">Both</option>
				<option value="other">Other</option>
				</select>

				<label class = "label">City</label>
				<input class ='inputtitle' required type="text" name = "city" style="font-size: 20px;"></input>

				<label class = "label">Neighbourhood</label>
				<input class ='inputtitle' required type="text" name = "neighbourhood" style="font-size: 20px;" ></input>

				<div class = "datetimeSelection">
					<div>
						<label class = "label">Date:</label>
						<input class ='dateSelect' required type="datetime-local" name = "date" style="font-size: 20px;" ></input>
					</div>
				</div>

				<br>
				<label class = "label" >Petminder's Reward (GBP):</label>
				<input class ='dateSelect' required type="number" name = "deposit" style="font-size: 20px; min = '10'" ></input>

				<label class= "inputImageLabel">
					Add an image of your pet!
					<input	type= "file" name= "jobImage" class = "inputImage" required accept="image/png, image/jpg, image/jpeg">
					<br>
					<img alt = "place image here!" src = "./Images/imageInputIcon.png" width="150px" class = imageIcon>
					<script src=".\JS\AddJobsScripts\imageInputter.js"></script>
				</label>

				<input type="submit" class = submit ></input>
			</form>
        </div>


	</div>

	<?php include ROOT . "/PHP Scripts/footer.php" ?>
</body>

</html>