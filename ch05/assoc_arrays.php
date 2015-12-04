<p>
  Basic Array: When order is important<br>
  Associative Array: When having a reference label is most important<br>
</p>

<?php $assoc = array("first_name" => "Vincent", "last_name" => "Adinolfi"); ?>
<?php echo $assoc["first_name"]; ?><br>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br>
<?php $assoc["first_name"] = "Larry"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br>
<?php $numbers = array(4,8,15,16,23,42); ?>
<?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>
<?php echo $numbers[0]; ?>
