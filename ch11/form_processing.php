<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Form Processing</title>

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
      <h1>Form Processing</h1>
    </div>
  </div>


<div class="container">

<pre>
	<?php
		print_r($_POST);
	?>
</pre>
<br>
<?php
// set default values
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
	} else {
		$username = "";
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	} else {
		$password = "";
	}
?>

<?php
	// set default values using ternary operator
	// boolean_test ? value_if_true : value_if_false
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";
?>

<?php
	// detect form submission (submit button must have name attribute)
	if (isset($_POST['submit'])) {
		echo "Form was submitted";

		// set default values
			if (isset($_POST['username'])) {
				$username = $_POST['username'];
			} else {
				$username = "";
			}
			if (isset($_POST['password'])) {
				$password = $_POST['password'];
			} else {
				$password = "";
			}

			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";

	} else {
		$username = "";
		$password = "";
	}
?>
<br>
<?php
	echo "{$username}: {$password}";
?>

</div>
























<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>
</html>
