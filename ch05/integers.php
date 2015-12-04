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
			Basic Math
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var1 = 3;<br>
				$var2 = 4;<br>
				echo ((1 + 2 + $var1) * $var2) / 2 - 5;
			</code>
		</td>
		<td>
			<?php
			$var1 = 3;
			$var2 = 4;
			echo ((1 + 2 + $var1) * $var2) / 2 - 5;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Absolute Value
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo abs(0 - 300);
			</code>
		</td>
		<td>
			<?php
			echo abs(0 - 300);
			?>
		</td>
	</tr>
	<tr>
		<th>
			Exponential
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo pow(2,8);
			</code>
		</td>
		<td>
			<?php
			echo pow(2,8);
			?>
		</td>
	</tr>
	<tr>
		<th>
			Square Root
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo sqrt(100);
			</code>
		</td>
		<td>
			<?php
			echo sqrt(100);
			?>
		</td>
	</tr>
	<tr>
		<th>
			Modulo
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo fmod(20,7);
			</code>
		</td>
		<td>
			<?php
			echo fmod(20,7);
			?>
		</td>
	</tr>
	<tr>
		<th>
			Random
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo rand();
			</code>
		</td>
		<td>
			<?php
			echo rand();
			?>
		</td>
	</tr>
	<tr>
		<th>
			Random (Min, Max)
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo rand(1,10);
			</code>
		</td>
		<td>
			<?php
			echo rand(1,10);
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable +=
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2 += 4;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2 += 4; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable -=
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2 -= 4;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2 -= 4; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable *=
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2 *= 3;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2 *= 3; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable /=
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2 /= 4;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2 /= 4; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable++
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2++;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2++; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable--
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2--;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2--; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Variable++
		</th>
		<td>
			<code class="language-php" data-lang="php">
				$var2++;<br>
				echo $var2;
			</code>
		</td>
		<td>
			<?php
			$var2++; echo $var2;
			?>
		</td>
	</tr>
	<tr>
		<th>
			Adding a String to a Variable
		</th>
		<td>
			<code class="language-php" data-lang="php">
				echo 1 + "2 houses";
			</code>
		</td>
		<td>
			<?php
			echo 1 + "2 houses";
			?>
		</td>
	</tr>
</tbody>
</table>
