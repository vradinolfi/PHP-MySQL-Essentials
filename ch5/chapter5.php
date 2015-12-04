<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Common PHP Data Types &amp; Examples</title>

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
<body style="padding-bottom: 400px;">


		<div class="jumbotron">
			<div class="container">
			<h1>Chapter 5:</h1>
			<h1>Common PHP Data Types &amp; Examples</h1>
		</div>
		</div>


	<div class="container">
		<div class="page-header">
			<h2>Variables</h2>
		</div>
		<?php require_once("variables.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Strings</h2>
		</div>
		<?php require_once("strings.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>String Functions</h2>
		</div>
		<?php require_once("string_functions.php"); ?>
	</div>


	<div class="container">
		<div class="page-header">
			<h2>Numbers: Integers</h2>
		</div>
		<?php require_once("integers.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Numbers: Floating Points</h2>
		</div>
		<?php require_once("floats.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Arrays</h2>
		</div>
		<?php require_once("arrays.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Associative Arrays</h2>
		</div>
		<?php require_once("assoc_arrays.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Array Functions</h2>
		</div>
		<?php require_once("array_functions.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Booleans</h2>
		</div>
		<?php require_once("booleans.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>NULL and empty</h2>
		</div>
		<?php require_once("null.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Type Juggling &amp; Casting</h2>
		</div>
		<?php require_once("juggling.php"); ?>
	</div>

	<div class="container">
		<div class="page-header">
			<h2>Constants</h2>
		</div>
		<?php require_once("constants.php"); ?>
	</div>

	<!--


	<table class="table table-bordered">
		<thead>
			<tr>
				<th>
					Data Type
				</th>
				<th>
					Code
				</th>
				<th>
					Result
				</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<th>
				Lowercase String
			</th>
			<td>
				<code class="language-php" data-lang="php">
					echo strtolower($third);
				</code>
			</td>
			<td>
				<?php
				echo strtolower($third);
				?>
			</td>
		</tr>
	</tbody>
	</table>

	-->



























	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>
</html>
