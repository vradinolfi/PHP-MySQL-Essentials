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
			Float
		</th><td>
			<code class="language-php" data-lang="php">
				echo $float = 3.14;
			</code>
		</td><td>
			<?php
			echo $float = 3.14;
			?>
		</td></tr>
    <tr><th>
			Float
		</th><td>
			<code class="language-php" data-lang="php">
				echo $float + 7;
			</code>
		</td><td>
			<?php
			echo $float + 7;
			?>
		</td></tr>
    <tr><th>
			Float
		</th><td>
			<code class="language-php" data-lang="php">
				4/3;
			</code>
		</td><td>
			<?php
			echo 4/3;
			?>
		</td></tr>
    <tr><th>
			Divide By Zero
		</th><td>
			<code class="language-php" data-lang="php">
				4/0;
			</code>
		</td><td>
			<?php
			echo "Error"
			?>
		</td></tr>
    <tr><th>
			Round
		</th><td>
			<code class="language-php" data-lang="php">
				echo round($float, 1);
			</code>
		</td><td>
			<?php
			echo round($float, 1);
			?>
		</td></tr>
    <tr><th>
			Ceiling
		</th><td>
			<code class="language-php" data-lang="php">
				echo ceil($float);
			</code>
		</td><td>
			<?php
			echo ceil($float);
			?>
		</td></tr>
    <tr><th>
			Floor
		</th><td>
			<code class="language-php" data-lang="php">
			echo floor($float);
			</code>
		</td><td>
			<?php
			echo floor($float);
			?>
		</td></tr>
    <tr><th>
			Is integer/float/numeric?
		</th><td>
			<code class="language-php" data-lang="php">
        $integer = 3;<br>
        echo "Is {$integer} integer?" . is_int($integer);<br>
        echo "Is {$float} integer?" . is_int($float);<br>
        echo "Is {$integer} float?" . is_float($integer);<br>
        echo "Is {$float} float?" . is_float($float);<br>
        echo "Is {$integer} numeric?" . is_numeric($integer);<br>
        echo "Is {$float} numeric?" . is_numeric($float);
			</code>
		</td><td>
			<?php
      $integer = 3;
      echo "Is {$integer} integer?" . is_int($integer) . "<br>";
      echo "Is {$float} integer?" . is_int($float) . "<br>";
      echo "Is {$integer} float?" . is_float($integer) . "<br>";
      echo "Is {$float} float?" . is_float($float) . "<br>";
      echo "Is {$integer} numeric?" . is_numeric($integer) . "<br>";
      echo "Is {$float} numeric?" . is_numeric($float);
			?>
		</td></tr>
</tbody>
</table>
