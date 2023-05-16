<!-- nofilter pour qu'il prenne en compte les balise html et qu'il ne le considère pas comme du text -->
<div>{$lb_titre nofilter} </div>
<div class='row'>
	<div class="col-md-4">


		<a href="{$categorie1->getLink()}">
			<p><img src="{$chemin}{$image1}" class="img img-responsive"></p>
			<p>{$categorie1->description nofilter}</p>
			<h3>{$categorie1->name}</h3>

		</a>
	</div>
	<div class="col-md-4">

		<a href="{$categorie2->getLink()}">
			<p><img src="{$chemin}{$image2}" class="img img-responsive"></p>
			<p>{$categorie2->description nofilter}</p>
			<h3>{$categorie2->name}</h3>
		</a>

	</div>
	<div class="col-md-4">

		<a href="{$categorie3->getLink()}">
			<p><img src="{$chemin}{$image3}" class="img img-responsive"></p>
			<p>{$categorie3->description nofilter}</p>
			<h3>{$categorie3->name}</h3>

		</a>
	</div>
</div>