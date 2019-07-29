<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>(Type a title for your page here)</title>
<script type="text/javascript">



function display_ct() {
			var x = d = new Date($.now());
			var refresh=1000; // Refresh rate in milli seconds
            var months=["JAN","FEB","MAR","APR","MAY","JUN","JUL",
		    "AUG","SEP","OCT","NOV","DEC"];
			document.getElementById('ct').innerHTML = d.getDate()+"-"+months[d.getMonth()]+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds() ;
			mytime=setTimeout('display_ct()',refresh)
		}

// function display_ct() {
// var x = new Date()
// var refresh=1000; // Refresh rate in milli seconds
// document.getElementById('ct').innerHTML = x;
// mytime=setTimeout('display_ct()',refresh)
//  }
</script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>

</body>
</html>
