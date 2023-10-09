<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/headstyle.css">
<style>
</style>
</head>
<body style="background:  linear-gradient(rgba(255,255,255,.7), rgba(255,255,255,.7)), url('../public/assets/images/background.jpg');">
<div>
<ul class="topnav">
  <li><a class="active" href="<?=ROOT?>">Acasa</a></li>
  <li><a href="<?=ROOT?>/nota">Jurnal</a></li>
	<li><a href="<?=ROOT?>/tari">Tari de vizitat</a></li>
	<li><a href="<?=ROOT?>/obiective">Obiective</a></li>
	<li><a href="<?=ROOT?>/adauga">Adauga destinatie</a></li>
	<li class="right"><a style="display: <?= $display ?>" href="<?=ROOT?>/login">Login</a></li>
	<li class="right"><a style="display: <?= $notdisplay ?>" href="<?=ROOT?>/delogare">Delogare</a></li>
	<li id="nume" class="right">Bine ati venit, <?=$nume ?></li>
</ul>
</div>