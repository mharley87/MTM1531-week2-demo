<?php

error_reporting (-1);
ini_set('display_errors', 'on');
var_dump($_POST);

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Forms</title>
</head>

<body>

<form action="forms.php" method="post">
	<label for="planet">Fav. Planets</label>
    <input id="planet" name="planet">
    
    <label for="moons">How many moons?</label>
    <input type="number" id="moons" name="moons">
    
    <label for="galaxy">What galaxy?</label>
    
    <select id="galaxy" name="galaxy">
    <option value="m">Milky Way</option>
    <option value="a">Andromeda</option>
    <option value="h">Tadpole Galaxy</option>
    <option value="x">Sunflower Galaxy</option>
    <option value="p">Cartwheel Galaxy</option>
    </select>
    
    <button type="submit">Submit</button>
</form>
<?php if (!empty($_POST['planet']) && !empty($_POST['moons'])) : ?>
<p><strong>Wow, I didnt know <?php echo $_POST['planet']; ?> had <?php echo $_POST['moons']; ?> moons.</strong></p>
 
	<?php if ($_POST['planet'] == 'Saturn') : ?>
	<p> Check out those rings</p>
	<?php elseif ($_POST['planet'] == 'Neptune') : ?> 
	<p> ya those rings are ok.</p>
	<?php else : ?>
    <p> no rings? say what?</p>
	<?php endif; ?> 
 
 <?php
 	$moon_diff = $_POST['moons'] - 1; 
	 ?>
 
 <p><?php echo $_POST['planet'];?> has <?php $moon_diff; ?> more moons than earth.</p>
 
 <?php endif; ?>
</body>
</html>