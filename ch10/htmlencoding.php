<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Encoding</title>

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
      <h1>HTML Encoding</h1>
      <h1>Subtitle</h1>
    </div>
  </div>


<div class="container">
<!--  <div class="page-header">
<h2></h2>
</div>-->

<?php
$linktext = "<Click> & learn more";
?>

<a href="">
	<?php echo htmlspecialchars($linktext); ?>
</a>
<br>

<?php
$text = "";
 ?>
<br>


<?php // What to use when

$url_page = "php/created/page/url.php";
$param1 = "This is a string with < >";
$param2 = "&#?*$[]+ are bad characters";
$linktext = "<Click> & learn more";

$url  = "http://localhost/";
$url .= rawurlencode($url_page);
$url .= "?" . "param1=" . urlencode($param1);
$url .= "&" . "param2=" . urlencode($param2);

?>

<a href="<?php echo htmlspecialchars($url); ?>">
	<?php echo htmlspecialchars($linktext); ?>
</a>





</div>
























<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>
</html>
