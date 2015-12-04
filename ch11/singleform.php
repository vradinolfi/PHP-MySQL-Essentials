<?php

	require_once('../ch10/included_functions.php');

	if (isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "kevin" && $password == "secret") {
			// successful login
			redirect_to("../basic.html");
		} else {
			$message = "There were some errors.";
		}
	} else {
		$username = "";
		$message = "Please log in.";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Forms</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>


  <div class="jumbotron">
    <div class="container">
      <h1>Forms</h1>
    </div>
  </div>


<div class="container">

	<?php echo $message; ?>

<form action="singleform.php" method="post">
	<div class="form-group">
		<label>Username:</label>
		<input class="form-control" type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" />
	</div>
	<div class="form-group">
		<label>Password:</label>
		<input class="form-control" type="password" name="password" value="" />
	</div>
	<input class="btn btn-default" type="submit" name="submit" value="Submit" />
</form>

</div>
























<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>
</html>
