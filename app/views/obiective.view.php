<?php include 'header.view.php'; ?>

<link rel="stylesheet" type="text/css" href="../public/assets/css/cssdestinatii1.css">

<?php
foreach($data['obiective'] as $arr){
?>
	<h1 style="text-align: center"><?php echo $arr->titlu; ?></h1>
		<div class="flex-container">
		
			<div class="flex-item-left">
				<a target="_blank" href="../public/images/<?php echo $arr->fotografie; ?>">
					<img src="../public/assets/images/<?php echo $arr->fotografie;?>" alt="foto" width="600" height="400">
				</a>
			</div>
				
			<div class="flex-item-right">
				<p><?php echo $arr->comentariu; ?></p>
			</div>
			
		</div>
		<br><hr>
<?php
}
?>

<?php include 'footer.view.php'; ?>