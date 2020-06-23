<?php include('header.php');?>
<div class="container">
<div class="row py-5">
<div class="col-12">
<h1>Hola mundo!</h1>
<?php $gatos  = array_slice(scandir('img'), 2);?>
<pre class="bg-light p-3"><code><?php print_r($gatos);?></code></pre>
</div>
<?php for ($i = 0; $i < $total = count ($gatos); $i++){ ?>
<div class="col-6 col-sm-4 col-md-3 mb-4"><img src="img/<?php print($gatos)[$i];?>" class="img-fluid"></div>
<?php };?>
</div>
</div>
</div>
<?php include('footer.php');?>