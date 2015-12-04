
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
				Display String
			</th>
			<td>
				<code class="language-php" data-lang="php">
					echo "Hello World!"
				</code>
			</td>
			<td>
				<?php echo "Hello World!" ?>
			</td>
		</tr>
		<tr>
			<th>
				Display String Made of Variables
			</th>
			<td>
				<code class="language-php" data-lang="php">
					$greeting = "Hello";<br>
					$target = "World";<br>
					$phrase = $greeting . " " . $target;<br>
					echo $phrase;
				</code>
			</td>
			<td>
				<?php
				$greeting = "Hello";
				$target = "World";
				$phrase = $greeting . " " . $target;
				echo $phrase;
				?>
			</td>
		</tr>
		<tr>
			<th>
				Using Double Quotes to Display a String
			</th>
			<td>
				<code class="language-php" data-lang="php">
					echo "$phrase Again";
				</code>
			</td>
			<td>
				<?php echo "$phrase Again"; ?>
			</td>
		</tr>
		<tr>
			<th>
				Using Single Quotes to Display a String
			</th>
			<td>
				<code class="language-php" data-lang="php">
					echo '$phrase Again';
				</code>
			</td>
			<td>
				<?php echo '$phrase Again'; ?>
			</td>
		</tr>
		<tr>
			<th>
				Using Curly Brackets to Display a String
			</th>
			<td>
				<code class="language-php" data-lang="php">
					echo "{$phrase} Again"
				</code>
			</td>
			<td>
				<?php echo "{$phrase} Again" ?>
			</td>
		</tr>
	</tbody>
	</table>
