<?php $numbers = array(8,23,15,42,16,4); ?>

Count: <?php echo count($numbers); ?><br>
Max value: <?php echo max($numbers); ?><br>
Min value: <?php echo min($numbers); ?><br>
<br>
<pre>
Sort: <?php sort($numbers); print_r($numbers); ?>
</pre>
<pre>
Reverse Sort: <?php rsort($numbers); print_r($numbers); ?>
</pre><br>
Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br>
Explode <?php print_r(explode(" * ", $num_string)); ?><br>
<br>
15 in array?: <?php echo in_array(15, $numbers); ?><br>
19 in array?: <?php echo in_array(19, $numbers); ?><br>
<a href="http://php.net/manual/en/ref.array.php">http://php.net/manual/en/ref.array.php</a>
