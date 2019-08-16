<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Edit Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body class="body">
<div class="signup-form">
	
	<form method = "GET" autocomplete="off">
		<h2>Edit Record</h2>
			
			<div class="form-group">
				<input type  =  "hidden" class="form-control" name  =  "page_no" placeholder = "Liqroo_ID" value="<?=$page_ID?>" readonly>
				<input type  =  "hidden" class="form-control" name  =  "query" placeholder = "Liqroo_ID" value="<?=$search?>" readonly>
				
				<input type  =  "text" id="id" class="form-control" name  =  "id" placeholder = "Liqroo_ID" value="<?=$fetchid?>" readonly>
			</div>

			<div class="form-group">
				<input type  =  "text" id="text1" class="form-control" name  =  "liqroo_price" placeholder = "Liqroo_Price" value="<?=$fetch_liqroo_price ?>">
			</div>

			<div class="form-group">
				<input type  =  "url" id="text2" class="form-control" name  =  "liqroo_url" placeholder = "Liqroo_URL" value="<?=$fetch_liqroo_url ?>">
			</div>

			<div class="form-group">
				<input type  =  "text" id="text3" class="form-control" name  =  "Whisky_Exchnage_Price" placeholder = "Whisky_Exchnage_Price" value="<?=$fetch_url1_price ?>">
			</div>

			<div class="form-group">
				<input type  =  "url" id="text4" class="form-control" name  =  "Whisky_Exchnage_Url" placeholder = "Whisky Exchnage Url" value="<?=$fetchurl1?>">
			</div>

			<div class="form-group">
				<input type  =  "text" id="text5" class="form-control" name  =  "Master_Of_Malt_Price" placeholder = "Master_Of_Malt_Price" value="<?=$fetch_url2_price  ?>">
			</div>

			<div class="form-group">
				<input type  =  "url" id="text6" class="form-control" name  =  "Master_Of_Malt_Url" placeholder = "Master Of Malt Url" value="<?=$fetchurl2?>">
			</div>

			<div class="form-group">
				<input type  =  "text" id="text7" class="form-control" name  =  "DrinkSupermarket_Price" placeholder = "DrinkSupermarket_Price" value="<?=$fetch_url3_price ?>">
			</div>

			<div class="form-group">
				<input type  =  "url" id="text8" class="form-control" name  =  "DrinkSupermarket_Url" placeholder = "DrinkSupermarket Url" value="<?=$fetchurl3?>">
			</div>

			<div class="form-group">
				<input type  =  "text" id="text9" class="form-control" name  =  "Other_Site_Price" placeholder = "Other_Site_Price" value="<?=$fetch_url4_price ?>">
			</div>

			<div class="form-group">
				<input type  =  "url" id="text10" class="form-control" name  =  "Other_Site_Url" placeholder = "Other Site Url" value="<?=$fetchurl4?>">
			</div>

			<div class="form-group">
				<input type  =  "text" id="text11" class="form-control" name  =  "URL5_Price" placeholder = "URL5_Price" value="<?=$fetch_url5_price ?>">
			</div>

			<div class="form-group">
				<input type  =  "url" id="text12" class="form-control" name  =  "url5" autocomplete="off" placeholder = "URL5" value="<?=$fetchurl5?>">
			</div>

			

			<div class="form-group">
				<label>Highlight  : </label>
				<input type="checkbox" id="myCheck" name="myCheck" data-highlight=<?php echo $fetch_highlight;  ?> value="1" <?php if($fetch_highlight == 1) {echo "checked";}?> >
			</div>

			<div class="form-group">
				<button type  =  "submit" class="btn btn-success btn-lg btn-block" name  =  "edit" value = "" onclick = "return confirm('Are you sure you want to update')">Save</button>
			</div>

			<!-- <button type = "button" name  = "reset" onclick = "reset();">Reset</button> |  -->
			
			<div class="form-group">
				<button type="button" class="btn btn-success btn-lg btn-block" onclick = "goback();">Back</button>
			</div>
		</div>
</div>

<!-- if condition ending for session checking-->
<?php
include_once 'footer.php';
// echo 'welcome'. $fetch_highlight; 
?>

<script>
	$(document).ready(function(){
		var custid = $('#myCheck').attr('data-highlight') 
		if(custid!=0){
			$("input").css("background-color", "#b3ffd9");
			$("#id").css("background-color", "#ffb3b3");
			$("#text1").css("background-color", "yellow");
			$("#text2").css("background-color", "yellow");
		// console.log(custid); 
		}
	});
</script>

