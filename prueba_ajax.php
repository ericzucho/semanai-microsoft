<?php header('Access-Control-Allow-Origin: *'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Semana I</title>
</head>
<body>

	

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	
	<script>

	alert("hola");

	    var serviceUrl = "https://ussouthcentral.services.azureml.net/workspaces/3d1e9211f3184ce9b4777de48e7a6a99/services/6c05fab59fd849f6abe96f9288bcfbe8/score";
	
	    $.ajax({
	        type: "POST",
	        url: serviceUrl,
	        data: {},
	        headers: {
	            "Authorization": "Bearer RDUotQF3Sh/coZdxZVIPsGiKH91TE2Mx+BDl9hcNanjB+Oc8TCn3U3/PAgdN6MyxK/2LrOu2c+RgedAeB04IFg==",
	            "Content-Type": "application/json;charset=utf-8"
	        }
	    }).done(function (data) {
	        console.log(data);
	        console.log("algo");
	    });

	</script>
	
	
</body>
</html>
