<?php

$result1 = true;
$result2 = false;

?>

Result1: <?php echo $result1; ?><br>
Result2: <?php echo $result2; ?><br>

result2 is boolean? <?php echo is_bool($result2); ?><br>

<?php

$number = 3.14;

if(is_float($number)) {
  echo "It is a float";
}

 ?>
