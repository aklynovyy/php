<?php

	// Constants
  define("TITLE", "Array");

	// Custom Variables
  $my_name = "Andrew Kl";
  $lessons_num = 6;


	// Moustache Array
  $attaches = array("array_item1", "array_item2", "array_item3");
  date_default_timezone_set('Europe/Kiev');

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Lecture <?php echo $lessons_num?>: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $attaches[0]; ?></li>
          <li><?php echo $attaches[1]; ?></li>
          <li><?php echo $attaches[2]; ?></li>
				</ul>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
