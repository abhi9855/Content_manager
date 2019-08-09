<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myCheck").click(function(){
    $("input").css("background-color", "yellow");
  });
});
</script>
</head>
<body>
<input type="checkbox" id="myCheck" name="myCheck">

<div class="form-group">
	<input type  =  "text" id="text" class="form-control" name  =  "URL5_Price" placeholder = "URL5_Price" value="<?=$fetch_url5_price ?>">
</div>

 <div class="form-group">
				<input type  =  "url" id="text" class="form-control" name  =  "Other_Site_Url" placeholder = "Other Site Url" value="<?=$fetchurl4?>">
			</div> 

</body>
</html>