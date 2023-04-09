<?php
session_start();




$data =  json_decode( file_get_contents('.\..\Data\jobs.json', true));
$count = count($data);
$data[] = $_SESSION['data'];


file_put_contents('.\..\Data\jobs.json', json_encode($data))
?>




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
			<form class = 'form' method="POST" action ="./../index.php" enctype="multipart/form-data">

            Congratulations, You have posted your Job!

				<input type="submit" class = submit ></input>
			</form>
        </div>


	</div>

	<?php include ROOT . "/PHP Scripts/footer.php" ?>
</body>

</html>