@ok no_php
<?php
  $x ::: array <var>;

	// Illustrates the problem of turning $x[0] into $t =& $x[0]
	$x[0];
	var_dump ($x);

?>
