Email-On-Exit
=============

Email visitor when exiting on your website.


== Installation Instruction ==

Add the following script inside <head> tag:

>  var WEBDATA = {
>		email: 'mvcejas@gmail.com',/* user email. default must set to <?=$_SESSION['form_data1']['email']?> */
>		subject: 'Please complete your BuySurety form.',/* email subject */
>		message: 'Thank you for visiting buysurety'/* email body, accept HTML */
>	};
>
>	window.onbeforeunload = confirmExit;
>	function confirmExit(){
>		$.post('pushmail.php',{
>			email: WEBDATA.email,
>			subject: WEBDATA.subject,
>			message: WEBDATA.message
>		});
>	}


== FAQ ==

How do I do this?

> Please see example.php 
