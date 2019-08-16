<?php
session_start();
if (isset($_SESSION['userid'])) {
    ?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>New Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body class="body">
<div class="signup-form">
	<form method = "POST" autocomplete="off">
		<h2>New Record</h2>
		<div class="form-group">
			<input type  =  "hidden" class="form-control" name  =  "page_no" placeholder = "Liqroo_ID" value="<?=$page_ID?>" readonly>
			<input type = "text" id="id" class="form-control"  name = "id"  placeholder="Liqroo_ID" required="" autocomplete="off" >
		</div>

		<div class="form-group">
			<input type  =  "text" id="text" class="form-control" name  =  "liqroo_price" placeholder = "Liqroo_Price" value="">
		</div>

		<div class="form-group">
				<input type  =  "url" id="text" class="form-control" name  =  "liqroo_url" placeholder = "Liqroo_URL" value="">
		</div>

		<div class="form-group">
			<input type  =  "text" id="text" class="form-control" name  =  "Whisky_Exchnage_Price" placeholder = "Whisky_Exchnage_Price" value="">
		</div>

		<div class="form-group">
			<input type = "url" id="text" class="form-control" name = "Whisky_Exchnage_Url"  placeholder="Whisky Exchnage Url">
		</div>

		<div class="form-group">
			<input type  =  "text" id="text" class="form-control" name  =  "Master_Of_Malt_Price" placeholder = "Master_Of_Malt_Price" value="">
		</div>

		<div class="form-group">
			<input type = "url" id="text" class="form-control" name = "Master_Of_Malt_Url"  placeholder="Master Of Malt Url">
		</div>

		<div class="form-group">
			<input type  =  "text" id="text" class="form-control" name  =  "DrinkSupermarket_Price" placeholder = "DrinkSupermarket_Price" value="">
		</div>

		<div class="form-group">
			<input type = "url" id="text" class="form-control" name = "DrinkSupermarket_Url"  placeholder="DrinkSupermarket Url">
		</div>

		<div class="form-group">
			<input type  =  "text" id="text" class="form-control" name  =  "Other_Site_Price" placeholder = "Other_Site_Price" value="">
		</div>

		<div class="form-group">
			<input type = "url" id="text" class="form-control" name = "Other_Site_Url"  placeholder="Other Site Url">
		</div>
		
		<div class="form-group">
			<input type  =  "text" id="text" class="form-control" name  =  "URL5_Price" placeholder = "URL5_Price" value="">
		</div>

		<div class="form-group">
			<input type = "url" id="text" class="form-control" name = "url5"  placeholder="URL5">
		</div>

		<div class="form-group">
				<label>Highlight  : </label>
				<input type="checkbox" id="myCheck" name="myCheck" value="1" <?php if($fetch_highlight == 1) {echo "checked";}?> >
			</div>

		<div class="form-group">
			<button type = "submit" class="btn btn-success btn-lg btn-block" id="submit" name = "add" value = "Insert" onclick="return confirm('Are you sure?')">Save</button>
		</div>
		<div class="form-group">
			<button type = "button" class="btn btn-success btn-lg btn-block" name  = "back" onclick = "goback();">Back</button>
		</div>
		<?php
} else {
    header("Location: login.php");
}
?>
	</form>
</div>
</body>
</html>
<?php
include_once 'footer.php';
?>
