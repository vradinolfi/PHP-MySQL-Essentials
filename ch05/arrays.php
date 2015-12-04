<?php

  $numbers = array(4,8,16,23,42);
  echo $numbers[1];

?>

<?php
$mixed = array(6, "fox", "dog", array("x","y","z"));
?><br>
<?php echo $mixed[2]; ?><br>
<?php echo $mixed[3]; ?><br>
<?php echo $mixed;?><br>
<pre>
<?php echo print_r($mixed); ?>
</pre>
<?php echo $mixed[3][1];?><br>
<?php $mixed[2] = "cat"?><br>
<?php $mixed[4] = "mouse"?><br>
<?php $mixed[] = "horse"?><br>

<?php echo print_r($mixed); ?><br>
<br>
PHP 5.4+ added short array syntax:<br>
<?php $array = [1,2,3]; ?>

<table class="table table-bordered">
	<thead><tr><th>
				Data Type
			</th><th>
				Code
			</th><th>
				Result
			</th></tr>
    </thead>
	<tbody>
    <tr><th>
			Basic Array
		</th><td>
			<code class="language-php" data-lang="php">
        $numbers = array(4,8,16,23,42);<br>
        echo $numbers[0];<br>
        echo $numbers[1];
			</code>
		</td><td>
			<?php
      $numbers = array(4,8,16,23,42);
      echo $numbers[0] . "<br>";
      echo $numbers[1];
			?>
		</td></tr>
</tbody>
</table>
