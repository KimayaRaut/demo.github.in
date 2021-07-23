<!DOCTYPE html>
<html>
<head>
<title>Register page</title>
<style>
	body{
		font-size: 40px;
		margin-left: 460px;
		margin-top: 20px;
		background-image: url('pic1.jpg');
		background-repeat: no-repeat;
	}
	h1{
		padding-left: 50px;
	}
	input{
		font-size: 40px;
		margin-top: 20px;
	}
	#btn{
		margin-left: 300px;
		margin-top: 40px;
		background-color: green;
		font-size: 60px;
	}
</style>
</head>
<body>
	<h1>Feedback Form</h1>
<div id="frm">
<form action="pro.php" method="POST">
Name: <input type="text" name="name1"><br>
Rate(1 to 10):<input type="number" name="rate"><br>
Comments: <input type="text" name="comment"><br>
Email:<input type="text" name="email"><br>
<input type="submit" id="btn" value="Submit"><br>
</form>
</div>
</body>
</html>