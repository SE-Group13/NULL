<?php include("path.php") ?>
<?php include(ROOT . "/PHP Scripts/filter_jobs.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="CSS/design.css" />
	<link rel="stylesheet" href="CSS/jobs.css?v=1" />
	<title>Jobs</title>
</head>

<body>
	<?php include ROOT . "/PHP Scripts/header.php" ?>
	
	<div class="container content cont">
		<div class="intro">
			<h1 class="title">Find Your Next Job</h1>
			<h2 class="subtitle">Explore available opportunities from pet owners near you</h2>
		</div>

		<div class="jobs-container">
			<div class="filters">
				<form class="filters-form" method="POST" action="jobs.php">
					<h2 class="form-title">Filter by:</h2>

					<div class="input-container">
						<label for="pet_type">Pet Type:</label>
						<select class="input-field" name="pet_type" id="pet_type">
							<option value="dog">Dog</option>
							<option value="cat">Cat</option>
							<option value="all">All</option>
						</select>
					</div>

					<div class="input-container">
						<label for="city">City:</label>
						<input class="input-field" type="text" name="city" id="city" placeholder="Please type in... ">
					</div>
					
					<div class="input-container">
						<label for="neighbourhood">Neighbourhood:</label>
						<input class="input-field" type="text" name="neighbourhood" id="neighbourhood" placeholder="Please type in... ">
					</div>

					<div class="input-container">
						<label for="date">Date:</label>
						<input class="input-field" type="date" name="date" id="date">
					</div>
					
					<div class="input-container">
						<label for="minPrice">Min Price:</label>
						<input class="input-field" type="number" name="minPrice" id="min-price" placeholder="Please type in... ">
					</div>

					<div class="input-container">
						<button class="input-field filter-btn" type="submit" value="Filter">Filter</button>
					</div>
				</form>
			</div>
			<div class="posts">
			<?php require (ROOT . "/PHP Scripts/display_jobs.php") ?>
			</div>
		</div>
	</div>

	<?php include ROOT . "/PHP Scripts/footer.php" ?>
</body>

</html>