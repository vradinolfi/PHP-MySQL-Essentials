<?php

function hello($name) {
	return "Hello {$name}!";
}

// This is how you redirect to a new page
function redirect_to($new_location) {
	header("Location: " . $new_location);
	exit;
}

?>
