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
				Concatenate Multiple Variables
			</th>
			<td>
				<code class="language-php" data-lang="php">
					$first = "The quick brown fox";<br>
					$second = " jumped over the lazy dog.";<br>
					// string concatenation<br>
					$third = $first;<br>
					$third .= $second;<br>
					echo $third;
				</code>
			</td>
			<td>
				<?php
				$first = "The quick brown fox";
				$second = " jumped over the lazy dog.";

				// string concatenation
				$third = $first;
				$third .= $second;
				echo $third;
				?>
			</td>
		</tr>
	<tr>
		<th>
			Make String Lowercase
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
<tr>
	<th>
		Make String Uppercase
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo strtoupper($third);
		</code>
	</td>
	<td>
		<?php
		echo strtoupper($third);
		?>
	</td>
</tr>
<tr>
	<th>
		Make First Letter of String Uppercase
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo ucfirst($third);
		</code>
	</td>
	<td>
		<?php
		echo ucfirst($third);
		?>
	</td>
</tr>
<tr>
	<th>
		Make First Letter of Each Word in String Uppercase
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo ucwords($third);
		</code>
	</td>
	<td>
		<?php
		echo ucwords($third);
		?>
	</td>
</tr>
<tr>
	<th>
		Find String Length
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo strlen($third);
		</code>
	</td>
	<td>
		<?php
		echo strlen($third);
		?>
	</td>
</tr>
<tr>
	<th>
		Trim String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo "A" . trim(" B C D ") . "E";
		</code>
	</td>
	<td>
		<?php
		echo "A" . trim(" B C D ") . "E";
		?>
	</td>
</tr>
<tr>
	<th>
		Find In String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo strstr($third, "brown");
		</code>
	</td>
	<td>
		<?php
		echo strstr($third, "brown");
		?>
	</td>
</tr>
<tr>
	<th>
		Replace By String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo str_replace("quick", "super-fast", $third);
		</code>
	</td>
	<td>
		<?php
		echo str_replace("quick", "super-fast", $third);
		?>
	</td>
</tr>
<tr>
	<th>
		Repeat String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo str_repeat($third, 2);
		</code>
	</td>
	<td>
		<?php
		echo str_repeat($third, 2);
		?>
	</td>
</tr>
<tr>
	<th>
		Make Substring From String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo substr($third, 5, 10);
		</code>
	</td>
	<td>
		<?php
			echo substr($third, 5, 10);
		?>
	</td>
</tr>
<tr>
	<th>
		Find Position In String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo strpos($third, "brown");
		</code>
	</td>
	<td>
		<?php
			echo strpos($third, "brown");
		?>
	</td>
</tr>
<tr>
	<th>
		Find Character In String
	</th>
	<td>
		<code class="language-php" data-lang="php">
			echo strchr($third, "z");
		</code>
	</td>
	<td>
		<?php
		echo strchr($third, "z");
		?>
	</td>
</tr>
</tbody>
</table>
