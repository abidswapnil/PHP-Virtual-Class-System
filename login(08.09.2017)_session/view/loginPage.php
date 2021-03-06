<!--This file generates the login page front-end design::-->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<!--CSS design::-->
	<style type="text/css">
		#tableId{
			width: 45%;
			height: 61vh;
			background-color: #f2f2f2;
			margin-top: 30px;
			margin-left: 350px;
			padding-top: 30px;
			padding-bottom: 30px;
			border-radius: 25px;
		}

		#td1{
			width: 35%;
			padding-left: 100px;
		}

		#errorId{
			color: red;
		}
		#footerId{
			text-align: center;
			margin-top: 115px;
			padding-top: 5px;
			height: 25px;
			width: 100%;
			background-color: grey;
		}
		#inputId{
			height: 25px; 
			width: 80%; 
			border-radius: 3px;
		}
	</style>
	
</head>
<body>
	<h1 style="margin-left: 550px; color: #808080;">Login Page</h1>

	<?php require '../content/loginPage2.php'; ?><!--This file needs to be loaded before the form section to use the variables declared and assigned in the file-->
<?//----------------------------------------------------------------------------------------------------------------------------?>


	<!--'POST' method prevents data from exposing on the url bar-->
	<!--Don't use $_SERVER['PHP_SELF'] as it is vulnerable to Cross-Site Scripting(XSS)-->
	<!--If you have to use $_SERVER['PHP_SELF'], then use it as htmlspecialchars($_SERVER['PHP_SELF'])-->
	<form method="POST" action=""><!--action="" refers to the self submission of this form-->

		<table id="tableId">
			<tr>
				<td></td>
				<td id="errorId"><?php echo $err; ?></td><!--Error messages related to username & password are shown in this section-->
			</tr>
			<?//----------------------------------------------------------------------------------------------------------------?>

			<tr>
				<td id="td1">E-mail:</td>
				<td>
					<input id="inputId" type="text" name="email" maxlength="255" value="<?php echo $eMail; ?>" required autofocus/><!--Username input area-->
				</td>
			</tr>
			<?//----------------------------------------------------------------------------------------------------------------?>
			
			<tr>
				<td id="td1">Password:</td>
				<td>
					<input id="inputId" type="password" name="password" maxlength="255" required/><!--Password input area-->
				</td>
			</tr>
			<?//----------------------------------------------------------------------------------------------------------------?>
			
			<tr>
				<td id="td1"><img src="../content/captcha.php"></td><!--Captcha image area-->
				<td id="errorId"><?php echo $captchaErr; ?></td><!--Captcha code related error message is shown here-->
			</tr>
			<tr>
				<td id="td1">Enter captcha: </td>
				<td><input id="inputId" type="text" name="captcha" maxlength="6" required/></td><!--Captcha input area-->
			</tr>
			<?//----------------------------------------------------------------------------------------------------------------?>
			
			<tr>
				<td></td>
				<td>
					<input id="inputId" type="submit" value="Login" style="height: 40px;"/><!--Login button-->
				</td>
			</tr>
			<?//----------------------------------------------------------------------------------------------------------------?>
		</table>

		<footer id="footerId">Don't have an account? Register <a href="registrationPage.php"><strong>here</strong></a></footer><!--Link to the registration page-->
	</form>
</body>
</html>
