<?php

require_once ("includes/config.php");
?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['bajo_ulogovan'])) {
	
header("Location: login.php");	

die();
	
}
require_once ("includes/header.php");
?>

<h1> super tajni info </h1>

</head>
<body>

<?php 

include ("includes/footer.php");

?>