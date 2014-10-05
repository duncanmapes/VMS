<?php
session_start();
if (!$_SESSION['username']) {
    //redirect to login page
    header('Location: login.php');
}

include ('includes/head.php');
?>

<body>
	<div id="wrapper">
		<?php
        include ('includes/nav.php');
		?>

		<div id="page-wrapper">


		</div>
	</div>
</body>
</html>

