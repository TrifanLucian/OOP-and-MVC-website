<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
</style>
<head>
<body>
<div>
<form  method="post">
Conectati-va la cont:<br>
Nume: <input type="text" name="nume"><br>
Parola:     <input type="password" name="parola"><br>
<input type="submit" value="Logare"><br>
</form>
</div>
<a href="<?=ROOT?>">Home</a>
<?php if(!empty($errors)):?>
	<div>
	<?= implode("<br>", $errors)?>
	</div>
	<?php endif;?>
</body>
</html>
