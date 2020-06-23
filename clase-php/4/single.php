<?php include('header.php');?>
<div class="container">
<div class="row py-5">
<div class="col-12">
<h1><a href="index.php">&larr; Volver</a></h1>
	<?php //primero voy a tomar ese i que viene en la URL
		$i = $_GET['id'];
	?>
	<?php 
		//primero, iré por el CSV
		$examen = array_map('str_getcsv', file('https://raw.githubusercontent.com/profesorfaco/dno037-2020/gh-pages/clase-14/examen.csv'));
		array_walk($examen, function(&$a) use ($examen) {$a = array_combine($examen[0], $a);});
		array_shift($examen);
	?>
</div>
<div class="col-12">
<h2><?php print ($examen[$i]['nombres']);?></h2>
<p><?php print ($examen[$i]['protopersona']);?></p>
</div>
</div>
</div>
<?php include('footer.php');?>