<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
<style>
form{
	width:50%;
	font-size:100%;
	margin:100px 100px 100px 400px;
	padding:20px;
	border:solid 2px green;border-radius:20px;
}
input,label,button,textarea
{
	width:90%;
	padding:10px;
	margin:10px;
}
.submitbutton
{
	background-color: #aaff00;
	font-size:30px;
	color:#000000;
}
</style>
</head>
<body>
	<form class="contact form" action="http://localhost/kk/sendmail.php">

		<label>State</label>
			<input type="text" name="state">
		<label>Mobile Number</label>
        	<input type="text" name="mobile">
        <label>Name</label>
        	<input type="text" name="name">
        <label>E-Mail</label>
        	<input type="text" name="email">
        <label>Message</label>
        <textarea name="messge"></textarea>
        <button class="submitbutton">Send Messge</button>

    </form>
</body>
</html>