<?php include('header.php');?>
<div class="container">
<div class="row py-5">
<div class="col-12">
	<h1>Hola mundo!</h1>
	<?php 
		//primero, iré por el CSV
		$examen = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2020/gh-pages/clase-14/examen.csv'));
		array_walk($examen, function(&$a) use ($examen) {$a = array_combine($examen[0], $a);});
		array_shift($examen);
	?>
</div>
<?php for ($i = 0; $i < $total = count ($examen); $i++){ ?>
<div class="col-6 col-md-4 mb-3">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title"><?php print($examen[$i]['nombres'])?></h3>
			<p class="card-text"><a href="single.php?id=<?php print $i;?>">Protopersona</a></p>
		</div>
	</div>
</div>
<?php };?>
</div>
</div>
<?php include('footer.php');?>