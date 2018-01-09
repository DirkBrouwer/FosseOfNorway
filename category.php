<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Fosse of Norway product search</title>
	<meta name="description" content="Fosse of Norway category page">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
		crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"
		integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	<link rel="stylesheet" href="styles/category.css">

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebPage",
			"url": "http://dirkbrouwer.student.fcict.nl/examenFE/category.php",
			"@graph": [{
					"@type": "BreadcrumbList",
					"itemListElement": [{
						"@type": "ListItem",
						"position": 1,
						"item": {
							"@id": "http://dirkbrouwer.student.fcict.nl/examenFE/index.php",
							"name": "Home"
						}
					}, {
						"@type": "ListItem",
						"position": 2,
						"item": {
							"@id": "http://dirkbrouwer.student.fcict.nl/examenFE/category.php",
							"name": "Noorse Vesten"
						}
					}]
				},
				{
					"@type": "Product",
					"name": "Noorse vesten",
					"category": "Noorse kleding",
					"material": "Noorse wol"
				}
			]
		}
	</script>
</head>

<body>
	<header role="banner" class="container-fluid">
		<?php include 'header.php';?>
	</header>
	<main role="main" class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb bg-white">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Noorse Vesten</li>
			</ol>
		</nav>
		<div class="sticky-top bg-secondary d-md-none" id="sideNavBtn">
			<button onclick="openNav()" class="navbar-toggler bg-secondary" type="button">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div id="sideNavMobile" class="sidenav text-center d-md-none">
			<a aria-label="Close" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<h4 class="font-weight-bold">Categorieën</h4>
			<ul class="list-unstyled">
				<li>
					<h6>Noorse truien</h6>
				</li>
				<li>
					<h6>Noorse kinderkleding</h6>
				</li>
				<li>
					<h6>Mutsen</h6>
				</li>
				<li>
					<h6>Sjaals</h6>
				</li>
				<li>
					<h6>Noorse vesten</h6>
				</li>
			</ul>
			<h4 class="font-weight-bold">Maat</h4>
			<ul class="list-unstyled">
				<li>
					<h6>S</h6>
				</li>
				<li>
					<h6>M</h6>
				</li>
				<li>
					<h6>L</h6>
				</li>
				<li>
					<h6>XL</h6>
				</li>
				<li>
					<h6>XXL</h6>
				</li>
			</ul>
			<h4 class="font-weight-bold">Kleur</h4>
			<ul class="list-unstyled">
				<li>
					<h6>Zwart</h6>
				</li>
				<li>
					<h6>Blauw</h6>
				</li>
				<li>
					<h6>Wit</h6>
				</li>
				<li>
					<h6>Rood</h6>
				</li>
			</ul>
			<h4 class="font-weight-bold">Prijs</h4>
			<ul class="list-unstyled">
				<li>
					<h6>Onder €150,-</h6>
				</li>
				<li>
					<h6>Tussen €150,- en €200,-</h6>
				</li>
				<li>
					<h6>Boven €200,-</h6>
				</li>
			</ul>
		</div>
		<div class="row">
			<div id="sideNav" class="col-md-3 d-none d-md-block">
				<ul class="list-unstyled sticky-top">
					<li>
						<h4 class="font-weight-bold">Categorieën</h4>
						<ul class="list-unstyled pl-2">
							<li>Noorse truien</li>
							<li>Noorse kinderkleding</li>
							<li>Mutsen</li>
							<li>Sjaals</li>
							<li>Noorse vesten</li>
						</ul>
					</li>
					<li>
						<h4 class="font-weight-bold">Maat</h4>
						<ul class="list-unstyled pl-2">
							<div id="sizeBtns" class="d-inline d-md-block">
								<button type="button" class="btn btn-secondary">S</button>
								<button type="button" class="btn btn-secondary">M</button>
								<button type="button" class="btn btn-secondary">L</button>
								<button type="button" class="btn btn-secondary">XL</button>
								<button type="button" class="btn btn-secondary">XXL</button>
							</div>
						</ul>
					</li>
					<li>
						<h4 class="font-weight-bold">Kleur</h4>
						<ul class="list-unstyled pl-2">
							<li>Zwart</li>
							<li>Blauw</li>
							<li>Wit</li>
							<li>Rood</li>
						</ul>
					</li>
					<li>
						<h4 class="font-weight-bold">Prijs</h4>
						<ul class="list-unstyled pl-2">
							<li>Onder €150,-</li>
							<li>tussen €150,- en €200,-</li>
							<li>Boven €200,-</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div id="categoryHeader" class="col-12 mb-3">
					<div class="col-6 text-center" id="categoryHeaderText">
						<h1 class="display-4">Noorse Vesten</h1>
						<h2>Exclusieve Designs</h2>
					</div>
				</div>
				<div class="productsPanel py-2 px-2 mb-3">
					<span class="oi oi-grid-two-up mr-2 changeViewBtn gridViewBtn"></span>
					<span class="oi oi-list changeViewBtn listViewBtn"></span>
					<select aria-label="Change price sorting" class="custom-select float-right">
						<option selected value="ascending">Prijs oplopend</option>
						<option value="descending">Prijs aflopend</option>
					</select>
				</div>
				<div id="productsViewGrid" class="productsView d-block">
					<div class="row justify-content-center">
						<div class="col-auto">
							<a href="product.php">
								<img data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit">
								<div class="productDesc text-center">
									<h3 class="headerColor">Noors vest Bryggen</h3>
									<h4 class="headerColor font-weight-bold">€ 219,95</h4>
								</div>
							</a>
						</div>
						<div class="col-auto">
							<img data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
						<div class="col-auto">
							<img data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart" class="productImgGrid">
							<div class="productDesc text-center">
								<h3 class="headerColor">Noors vest Bryggen</h3>
								<h4 class="headerColor font-weight-bold">€ 219,95</h4>
							</div>
						</div>
					</div>
				</div>
				<div id="productsViewList" class="productsView d-none">
					<div class="row mx-auto">
						<div class="col-5">
							<a href="product.php">
								<img data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit" class="productImgList">
							</a>
						</div>
						<div class="productDesc col-7">
							<h5 class="headerColor text-center">Noors vest Bryggen</h5>
							<h6 class="headerColor text-center font-weight-bold">€ 219,95</h6>
							<p class="text-left">Hemsedal Noorse trui voor dames en heren. Heerlijk warme trui met fleece kraag. Prachtige Noorse
								trui voor elke dag en elk seizoen! 1e kwaliteit sterke Noorse wol en gemaakt in Noorwegen,
								u koopt een authentieke, 'ouderwetse' Noorse trui!! ...en dus niet een produkt uit China
								of Nepal gemaakt van Australische wol o.i.d. Voor meer info zie rubriek produktinformatie
								op deze site. Van 'een Susan Fosse ' heeft u jarenlang plezier!</p>
						</div>
					</div>
					<div class="row mx-auto">
						<div class="col-5">
							<img data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw" class="productImgList">
						</div>
						<div class="productDesc col-7">
							<h5 class="headerColor text-center">Noors vest Bryggen</h5>
							<h6 class="headerColor text-center font-weight-bold">€ 219,95</h6>
							<p class="text-left">Hemsedal Noorse trui voor dames en heren. Heerlijk warme trui met fleece kraag. Prachtige Noorse
								trui voor elke dag en elk seizoen! 1e kwaliteit sterke Noorse wol en gemaakt in Noorwegen,
								u koopt een authentieke, 'ouderwetse' Noorse trui!! ...en dus niet een produkt uit China
								of Nepal gemaakt van Australische wol o.i.d. Voor meer info zie rubriek produktinformatie
								op deze site. Van 'een Susan Fosse ' heeft u jarenlang plezier!</p>
						</div>
					</div>
					<div class="row mx-auto">
						<div class="col-5">
							<img data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart" class="productImgList">
						</div>
						<div class="productDesc col-7">
							<h5 class="headerColor text-center">Noors vest Bryggen</h5>
							<h6 class="headerColor text-center font-weight-bold">€ 219,95</h6>
							<p class="text-left">Hemsedal Noorse trui voor dames en heren. Heerlijk warme trui met fleece kraag. Prachtige Noorse
								trui voor elke dag en elk seizoen! 1e kwaliteit sterke Noorse wol en gemaakt in Noorwegen,
								u koopt een authentieke, 'ouderwetse' Noorse trui!! ...en dus niet een produkt uit China
								of Nepal gemaakt van Australische wol o.i.d. Voor meer info zie rubriek produktinformatie
								op deze site. Van 'een Susan Fosse ' heeft u jarenlang plezier!</p>
						</div>
					</div>
				</div>
				<div class="productsPanel py-2 px-2 mb-4">
					<span class="oi oi-grid-two-up mr-2 changeViewBtn gridViewBtn"></span>
					<span class="oi oi-list changeViewBtn listViewBtn"></span>
					<select aria-label="Change price sorting" class="custom-select float-right">
						<option selected value="ascending">Prijs oplopend</option>
						<option value="descending">Prijs aflopend</option>
					</select>
				</div>
				<div id="productsDesc" class="headerColor">
					<h4>Noorse vesten van 'ouderwetse' Noorse kwaliteit</h4>
					<p>Noorse Vesten van 'ouderwetse' Noorse kwaliteit. Susan Fosse Noorse vesten voor dames en heren zijn van
						degelijke Noorse kwaliteit en met de hand vervaardigd in Bergen‚Noorwegen,dus geen 'lage lonen landen'
						productie. De Noorse vesten zijn gemaakt van de allerbeste Noorse wol (geen Merinowol, of ' 100%
						nieuwe wol) en bevatten de originele Noorse, KM tinnen sluitingen en knopen. De trui behoudt hierdoor
						jarenlang zijn pasvorm,kleuren blijven helder en de tinnen sluitingen worden niet zwart. Door de
						vesten in Noorwegen te maken en gebruik te maken van de originele materialen blijft de kwaliteit
						gewaarborgd en bent u zeker van een origineel Noors vest De Noorse vesten zijn een exclusieÍ ontwerp
						van Susan Fosse!
					</p>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php';?>
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js" integrity="sha256-D0J9D4igaYyVX/Y78Tr0yoDJsy8hi14hCEdFDakBp08="
		crossorigin="anonymous"></script>
	<script src="scripts/category.min.js"></script>
</body>

</html>