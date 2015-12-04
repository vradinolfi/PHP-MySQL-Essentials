settype($var, "integer")<br>
(integer) $var<br>
<br>
string, int, integer, float, array, cool, boolean<br>
<br>
<h3>Type Juggling</h3>
<?php $count = "2"; ?>
Type: <?php echo gettype($count); ?><br>
<?php $count += 3 ?>
Type: <?php echo gettype($count); ?><br>
<?php $cats = "I have " . $count . " cats."; ?>
Cats: <?php echo gettype($cats);?><br>
<br>
<h3>Type Casting</h3>
<?php settype($count, "integer"); ?>
count: <?php echo gettype($count);?><br>
<?php $count2 = (string) $count; ?>
count: <?php echo gettype($count);?><br>
count2: <?php echo gettype($count2);?><br>
<br>

<?php $test1 = 3;?>
<?php $test2 = 3;?>
<?php settype($test1, "string"); ?>
<?php (string) $test2;?>
test1: <?php echo gettype($test1);?><br>
test2: <?php echo gettype($test2);?><br>
