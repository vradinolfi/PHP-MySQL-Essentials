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
  			<h1>Chapter 6:</h1>
  			<h1>Logical Expressions</h1>
		  </div>
		</div>


	<div class="container">
		<div class="page-header">
			<h2>If Statements</h2>
		</div>

    <?php
    $a = 4;
    $b = 3;

    if ($a > $b) {
      echo "a is larger than b";
    }

    ?>
    <br>
    <?php //only welcome new users
    $new_user = true;
    if ($new_user) {
      echo "<h3>Welcome!</h3>";
      echo "<p>We are glad you decided to join us!</p>";
    }
    ?>

    <?php //don't divide by zero

    $numerator = 20;
    $denominator = 0;
    $result = 0;
    if ($denominator > 0) {
      $result = $numerator / $denominator;
    }

    echo "Result: {$result}";
    ?>
  </div>


<div class="container">
  <div class="page-header">
    <h2>Else &amp; Elseif Statements</h2>
  </div>

    <?php

    if ($a > $b) {
      echo "a is larger than b";
    } elseif ($a < $b) {
      echo "a is smaller than b";
    } else {
      echo "a is equal to b";
    }

    ?>

	</div>

  <div class="container">
    <div class="page-header">
      <h2>Comparison &amp; Logical Operators</h2>
    </div>

    equal(assignment): =<br>
    equal(comparison): ==<br>
    identical: ===<br>
    compare: > < >= <= <><br>
    not equal: !=<br>
    not identical: !==<br>
    <br>
    and: &&<br>
    or: ||<br>
    not: !<br>
    <br>
    <?php
      $a = 4;
      $b = 3;
      $c = 20;
      $d = 1;
      if (($a > $b) && ($c > $d)) {
        echo "a is larger than b AND c is larger than d";
      }
      echo "<br>";
      if (($a > $b) || ($c > $d)) {
        echo "a is larger than b OR c is larger than d";
      }

     ?>
<br>
     <?php
     $e = 100;
     if (!isset($e)) {
       $e = 200;
     }
     echo $e;

      ?>
      <br>
      <?php

      $quantity = "";
      if (empty($quantity) && !is_numeric($quantity)) {
        echo "You must enter a quantity.";
      }

       ?>

  </div>

  <div class="container">
    <div class="page-header">
      <h2>Switch Statements</h2>
    </div>

    <?php

    $a = 0;

    switch ($a) {
      case 0:
        echo "a equals 0<br>";
      case 1:
        echo "a equals 1<br>";
      case 2:
        echo "a equals 2<br>";
      case 3:
        echo "a equals 3<br>";
    }

     ?>
     <br>
     <?php

     $a = 0;

     switch ($a) {
       case 0:
         echo "a equals 0<br>";
         break;
       case 1:
         echo "a equals 1<br>";
         break;
       case 2:
         echo "a equals 2<br>";
         break;
       case 3:
         echo "a equals 3<br>";
         break;
      default:
         echo "a is not 0, 1, 2, or 3<br>";
     }

      ?>
      <br>
      <?php

      $a = 20;

      switch ($a) {
        case 0:
          echo "a equals 0<br>";
          break;
        case 1:
          echo "a equals 1<br>";
          break;
        case 2:
          echo "a equals 2<br>";
          break;
        case 3:
          echo "a equals 3<br>";
          break;
       default:
          echo "a is not 0, 1, 2, or 3<br>";
      }

       ?>
       <br>
       <?php

       $user_type = 'customer';

       switch ($user_type) {
         case 'student':
         echo "Welcome!";
         break;
         case 'press':
         case 'customer':
         echo "Hello!";
         break;
       }


        ?>

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
