<?php include '../emm/easymenu.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Menu Display Sample - Easy Menu Manager</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="sample.css">
<link rel="stylesheet" type="text/css" href="menu.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(function() {
	$('.vertical li:has(ul)').addClass('parent');
	$('.horizontal li:has(ul)').addClass('parent');
});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1>Easy Menu Manager</h1><h2>Public Demonstration</h2>
		<h2 id="link"><a href="../emm">View Admin</a></h2>
	</div>

	<div id="main">

		<h3>Example 1</h3>
		Showing menu with ID = 1
		<pre>echo easymenu(1);</pre>
		<h4>Output:</h4>
		<?php echo easymenu(1); ?>

		<h3>Example 2</h3>
		Showing menu with ID = 1 and class = horizontal
		<pre>echo easymenu(1, 'class="horizontal white"');
echo easymenu(1, 'class="horizontal black"');
echo easymenu(1, 'class="horizontal red"');
echo easymenu(1, 'class="horizontal green"');
echo easymenu(1, 'class="horizontal blue"');</pre>
		<h4>Output:</h4>
		<?php echo easymenu(1, 'class="horizontal white"'); ?>
		<div class="clear"></div>
		<?php echo easymenu(1, 'class="horizontal black"'); ?>
		<div class="clear"></div>
		<?php echo easymenu(1, 'class="horizontal red"'); ?>
		<div class="clear"></div>
		<?php echo easymenu(1, 'class="horizontal green"'); ?>
		<div class="clear"></div>
		<?php echo easymenu(1, 'class="horizontal blue"'); ?>
		<div class="clear"></div>

		<h3>Example 3</h3>
		Showing menu with ID = 2 and class = vertical
		<pre>echo easymenu(2, 'class="vertical white"');
echo easymenu(2, 'class="vertical black"');
echo easymenu(2, 'class="vertical red"');
echo easymenu(2, 'class="vertical green"');
echo easymenu(2, 'class="vertical blue"');</pre>
		<h4>Output:</h4>
		<?php echo easymenu(2, 'class="vertical white"'); ?>
		<?php echo easymenu(2, 'class="vertical black"'); ?>
		<?php echo easymenu(2, 'class="vertical red"'); ?>
		<?php echo easymenu(2, 'class="vertical green"'); ?>
		<?php echo easymenu(2, 'class="vertical blue"'); ?>

	</div>

	<div id="footer">
	Easy Menu Manager
	</div>
</div>
</body>
</html>