<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Say Hello</title>
</head>

<body>

<?php if (isset($_GET['name'])) : ?> 
<h1>Hello, <?php echo $_GET['name']; ?></h1>
<?php endif; ?>

</body>
</html>