<?php

$con = mysqli_connect("localhost","id6311139_dvzn42","dvzn42");
if (!$con)
	die('Could not connect : '.mysqli_error());
mysqli_select_db($con, "id6311139_ongcdatabase");
?>