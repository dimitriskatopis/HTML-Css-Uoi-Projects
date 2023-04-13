<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="text">
			<p>
				Μπορείτε και εσείς να υποβάλετε τις δικές σας φωτογραφίες 
				στο παρακατω box. (υπο κατασκευή )
			</p>
			<form action="/action_page.php">
				<div class="custom-file mb-3">
					<input type="file" class="custom-file-input" id="customFile" name="filename">
					<label class="custom-file-label" for="custom-file">Επιλογή αρχείου</label>
				</div>
				<div class="mt-3">
      				<button type="submit" class="btn btn-primary">Submit</button>
    			</div>
    		</form>
    	</div>
    </div>

</body>
</html>
<?php include "bottom.php"; ?>
