<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Debugging &amp; Troubleshooting</title>

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
      <h1>Chapter 9:</h1>
      <h1>Debugging &amp; Troubleshooting</h1>
    </div>
  </div>


<div class="container">
  <div class="page-header">
<h2>Debugging</h2>
</div>

  <?php

  $number = 99;
  $string = "Bug?";
  $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

  var_dump($number);
  var_dump($string);
  var_dump($array);

  ?>
  <br>
  <pre>
    <?php

    print_r(get_defined_vars());

     ?>
   </pre>
   <br>
   <?php

   function say_hello_to($word) {
     echo "Hello {$word}!<br>";
     var_dump(debug_backtrace());
   }

   say_hello_to("Everyone");

   ?>


</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>
</html>
