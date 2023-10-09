<?php include 'header.view.php'; ?>

<h1> Introduceti o noua destinatie turistica: </h1>
<div>
<form  method="post" enctype="multipart/form-data">
titlu:          <input type="text" name="titlu"><br><br>
tara:           <input type="text" name="tara"><br><br>
comentariu:<br>     <textarea name="comentariu" rows="10" cols="40"></textarea><br><br>
fotografie:<br>
<input type="file" name="imagine" id="imagine"> <br><br>
<input type="submit" name="submit">
</form>
</div>

<?php if(!empty($errors)):?>
<div>
<?= implode("<br>", $errors)?>
</div>
<?php endif;?>

<?php include 'footer.view.php'; ?>

