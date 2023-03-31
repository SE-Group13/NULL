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
		<form action="process.php" method="post">
			<input type="text" name="cardNumber" id="cardNumber" placeholder="card number">

			<input type="text" name="expiration" id="expiration" placeholder="MM/YY">

			<input type="text" name="cvc" id="cvc" placeholder="cvc">

			<input type="text" name="street" id="street" placeholder="street address">

			<input type="text" name="city" id="city" placeholder="city">

			<input type="text" name="postcode" id="postcode" placeholder="postcode">

			<input type="submit" value="Pay with PayPal">
		</form>
	</div>
</body>