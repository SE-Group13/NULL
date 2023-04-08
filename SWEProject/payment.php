<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="CSS/design.css" />
	<link rel="stylesheet" href="CSS/payment.css" />
	<title>Payment</title>
</head>

<body>
	<div class="container">
		<h1>Enter your payment detail here</h1>
		<form action="PHP Scripts\processPayment.php" method="post">
			<input type="text" name="product" id="product" placeholder="Product">

			<input type="text" name="price" id="price" placeholder="Price">

			<input type="text" name="description" id="description" placeholder="Description">

			<input type="text" name="street" id="street" placeholder="Street Address">

			<input type="text" name="city" id="city" placeholder="City">

			<input type="text" name="postcode" id="postcode" placeholder="Postcode">

			<input type="submit" name="submit" value="Pay with PayPal">
		</form>
	</div>
</body>

</html>