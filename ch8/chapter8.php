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
      <h1>Chapter 8:</h1>
      <h1>User-Defined Functions</h1>
    </div>
  </div>


<div class="container">
  <div class="page-header">
<h2>Functions: Defining</h2>
</div>
<?php

  function say_hello() {
    echo "Hello World!<br>";
  }

  say_hello();

  function say_hello_to($word) {
    echo "Hello {$word}!<br>";
  }

  say_hello_to("World");
  say_hello_to("Everyone");

  say_hello_loudly();

  function say_hello_loudly() {
    echo "HELLO WORLD!<br>";
  }

 ?>
 </div>

 <div class="container">
   <div class="page-header">
 <h2>Functions: Arguments</h2>
 </div>

  <?php

  function say_hello_to_name($word) {
    echo "Hello {$word}!<br>";
  }

  // $name is assigned to $word in the function,
  // they do not require a relationship
  $name = "John Doe";

  say_hello_to_name($name);

   ?>
   <br>
   <?php

   // order matters
   function better_hello($greeting, $target, $punct) {
     echo $greeting . " " . $target . $punct . "<br>";
   }

   better_hello("Hello", $name, "!");
   better_hello("Greetings", $name, "!!!");
   better_hello("Greetings", $name, null);

   ?>

</div>
<div class="container">
  <div class="page-header">
<h2>Functions: Return Values</h2>
</div>

  <?php

  function add($val1, $val2) {
    $sum = ($val1 + $val2);
    return $sum;
    // allows value to be called outside of function
  }

  $result1 = add(3,4);
  $result2 = add(5,$result1);
  echo $result1;
  echo "<br>";
  echo $result2;

  ?>
  <br>
  <?php

  function chinese_zodiac($year) {
    switch (($year - 4) % 12) {
      case  0: return 'Rat';
      case  1: return 'Ox';
      case  2: return 'Tiger';
      case  3: return 'Rabbit';
      case  4: return 'Dragon';
      case  5: return 'Snake';
      case  6: return 'Horse';
      case  7: return 'Goat';
      case  8: return 'Monkey';
      case  9: return 'Rooster';
      case 10: return 'Dog';
      case 11: return 'Pig';
    }
  }

  $zodiac = chinese_zodiac(2013);
  echo "2013 is the year of the {$zodiac}.<br>";

  echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br>";

  ?>
  <br>
  <?php

  function best_hello($greeting, $target, $punct) {
    echo $greeting . " " . $target . $punct . "<br>";
  }

  echo best_hello("Hello", "John Doe", "!");

   ?>

</div>

<div class="container">
  <div class="page-header">
<h2>Functions: Multiple Returns</h2>
</div>
  <?php

  function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add,$subt);
  }

  $result_array = add_subt(10,5);
  echo "Add: " . $result_array[0] . "<br>";
  echo "Subtract: " . $result_array[1] . "<br>";

  list($add_result, $subt_result) = add_subt(20,7);
  echo "Add: " . $add_result . "<br>";
  echo "Subtract: " . $subt_result . "<br>";

  ?>



</div>


<div class="container">
  <div class="page-header">
<h2>Functions: Scope &amp; Global Variables</h2>
</div>

  <?php

  $bar = "outside"; //global scope

  function foo() {
    global $bar;
    if (isset($bar)) {
        echo "foo: " . $bar . "<br>";
    }
    $bar = "inside"; //local scope
  }

  echo "1: " . $bar . "<br>";
  foo();
  echo "2: " . $bar . "<br>";

   ?>
</div>




<div class="container">
  <div class="page-header">
<h2>Functions: Setting Default Argument Values</h2>
</div>

<?php

  function paint($room = "office", $color = "red") {
    return "The color of the {$room} is {$color}.<br>";
  }

  echo paint();
  echo paint("bedroom","blue");
  echo paint("bedroom");
  echo paint("blue");
  echo paint();


 ?>

</div>



























































 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>
</html>
