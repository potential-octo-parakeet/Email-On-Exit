<!DOCTYPE html>
<html>
<head>
  <title>Email On Exit</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>
	var WEBDATA = {
		email: 'me@mvcejas.com',/* user email. default must set to <?=$_SESSION['form_data1']['email']?> */
		subject: 'Please complete your BuySurety form.',/* email subject */
		message: '<h1>Thank you for visiting buysurety</h1>'/* email body, accept HTML */
	};

	window.onbeforeunload = confirmExit;
	function confirmExit(){
		$.post('pushmail.php',{
			email: WEBDATA.email,
			subject: WEBDATA.subject,
			message: WEBDATA.message
		});

		return 'Why wait? blah blah blah'
	}

  	WEBDATA.email = window.prompt("Enter your email","me@mvcejas.com");

	</script>
</head>
<body>
<h1>This example will email you once you leave this page.</h1>
</body>
</html>
