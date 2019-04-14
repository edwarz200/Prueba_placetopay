<?php
include("pages/header.html");
?>
<!----------------------------------------------------------------------------------------------------->
<section>
	<div id="carouselExampleIndicators" class="carousel carousel1 slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" id="lii" class="active lip bg-info"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" class="lip bg-info"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2" id="lif" class="lip bg-info"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="banner1" alt="First slide">

				</div>
			</div>
			<div class="carousel-item">
				<div class="banner2" alt="Second slide">

				</div>
			</div>
			<div class="carousel-item">
				<div class="banner3" alt="Third slide">

				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<i class="fas fa-chevron-left fa-2x"></i>
			<span class="sr-only"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<i class="fas fa-chevron-right fa-2x"></i>
			<span class="sr-only"></span>
		</a>
	</div>
	<div class="container c1">
		<ul class="row">
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded" onclick="caracteristicas(1)">
				<form name="">
					<h5 class="text-justify text-center font-weight-bold">Portatil Zenbook Ux433fa</h5>
					<img class="w-100 he-100" src="assets/img-compras/p1/img2.png">
					<p class="p-3 text-secondary"> Precio: <?php $pre1com =  4219888;
															echo ($pre1com) ?> COP </p>
					<input type="submit" class="btn btn-primary btn-lg" value="comprar">
					<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
				</form>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Portatil Asus Ux410ua</h5>
				<img class="w-100 he-100" src="assets/img-compras/p2/img1.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre2com =  3236500;
														echo ($pre2com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Portatil Asus Amd Ryzen3</h5>
				<img class="w-100 he-100" src="assets/img-compras/p3/img1.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre3com = 1399900;
														echo ($pre3com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Apple Iphone Xs Max </h5>
				<img class="w-100 he-100" src="assets/img-compras/p4/img1.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre5com = 4559000;
														echo ($pre5com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Iphone 6 De 16 Gb</h5>
				<img class="w-100 he-100" src="assets/img-compras/p5/img1.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre6com = 560000;
														echo ($pre6com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 .col-xs-12 col-sm-6 p-3 h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Samsung Galaxy S7 Edge </h5>
				<img class="w-100 he-100" src="assets/img-compras/p6/img1.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre7com = 1249000;
														echo ($pre7com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Camara Canon Sx530</h5>
				<img class="w-100 he-100" src="assets/img-compras/p7/img2.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre9com = 899000;
														echo ($pre9com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Cámara Sony Con Lente Zeiss</h5>
				<img class="w-100 he-100" src="assets/img-compras/p8/img1.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre10com = 993579;
														echo ($pre10com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
			<li class="col-md-4 p-3  .col-xs-12 col-sm-6  h-100 d-inline-block sombra rounded">
				<h5 class="text-justify text-center font-weight-bold">Camara Nikon Coolpix</h5>
				<img class="w-100 he-100" src="assets/img-compras/p9/img3.png">
				<p class="p-3 text-secondary"> Precio: <?php $pre11com = 1579000;
														echo ($pre11com) ?> COP</p>
				<input type="submit" class="btn btn-primary btn-lg" value="comprar">
				<i class="fas fa-shopping-cart text-orange btn btn-lg"></i>
			</li>
		</ul>
	</div>
	<!----------------------------------------------------------------------------------------------------->
	<?php
	include("pages/footer.html");

	?>