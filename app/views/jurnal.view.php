<?php include 'header.view.php'; ?>

<link rel="stylesheet" type="text/css" href="../public/assets/css/jurnal.css">

<div class="nota">
	<h1> Introduceti o nota de jurnal: </h1>
	<form  method="post" enctype="multipart/form-data">
		titlu:          <input type="text" name="titlu"><br><br>
		nume:           <input type="text" name="nume"><br><br>
		comentariu:<br>     <textarea name="comentariu" rows="15" cols="86"></textarea><br><br>
		introduceti data calendaristica:<br>
		<input type="date" name="data" id="data"> <br><br>
		<input type="submit" name="submit">
	</form>
</div>

<br>
<div class="erori">
	<?php if(!empty($errors)):?>
	<div>
	<?= implode("<br>", $errors)?>
	</div>
	<?php endif;?>
</div>

<div class="jurnal";>
	<?php
	foreach($data['jurnal'] as $arr){
	?>
		<h1><?php echo $arr->titlu;?></h1>
		<h2><?php echo $arr->nume; ?> - <?php echo $arr->data; ?></h2>
		<h4><?php echo $arr->comentariu ?></h3>
	<?php
	}
	?>
</div>

<?php include 'footer.view.php'; ?>