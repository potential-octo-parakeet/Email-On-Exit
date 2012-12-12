# Installation Instruction

Add the following script inside <head> tag:

== begin snippet ==
  var WEBDATA = {
		email: 'mvcejas@gmail.com',/* user email. default must set to <?=$_SESSION['form_data1']['email']?> */
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
	}

== end snippet ==
