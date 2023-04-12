<?php
session_start();
//this checks whether the page was reloaded, by checking whether the data is empty 

if ($_SESSION['data']!= []){

	//if the page is not reloaded data is decoded from the database
    $data =  json_decode( file_get_contents('.\..\Data\jobs.json', true));

	//data gets added here
	$data[] = $_SESSION['data'];

	//data gets enteered into the database
    file_put_contents('.\..\Data\jobs.json', json_encode($data));

	//session data is cleared preventing repeats entries form reloading
    $_SESSION['data'] = [];
}
?>





<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../CSS/design.css" />
	<link rel="stylesheet" href="../CSS/AddJob.css" />
	<title>Post Jobs</title>
</head>

<body>
	<?php include "./header.php" ?>
	
	<div class="container content cont">
        <div>
			<form class = 'form' method="POST" action ="./../index.php" enctype="multipart/form-data">

            Congratulations, You have posted your Job!

				<input type="submit" class = submit ></input>
			</form>
        </div>


	</div>

	<?php include "footer.php" ?>
</body>

</html>