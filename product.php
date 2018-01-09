<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Fosse of Norway product page</title>
	<meta name="description" content="Fosse of Norway product page">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
		crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"
		integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	<link rel="stylesheet" href="styles/product.css">

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebPage",
			"url": "http://dirkbrouwer.student.fcict.nl/examenFE/product.php",
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
					}, {
						"@type": "ListItem",
						"position": 3,
						"item": {
							"@id": "http://dirkbrouwer.student.fcict.nl/examenFE/product.php",
							"name": "Noorse trui Folgefonn"
						}
					}]
				},
				{
					"@type": "IndividualProduct",
					"brand": {
						"@type": "Brand",
						"name": "Folgefonn"
					},
					"category": "Noorse truien/Noorse trui Folgefonn",
					"color": "zwart",
					"image": "http://dirkbrouwer.student.fcict.nl/examenFE/images/folgefonn_front.jpg"
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
				<li class="breadcrumb-item">
					<a href="category.php">Noorse truien</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Noorse trui Folgefonn</li>
			</ol>
		</nav>
		<div class="row mb-2 mb-md-5">
			<div id="productImage" class="col-12 col-md-4 mb-3">
				<img id="mainProductImage" src="images/folgefonn.jpg" alt="Noorse trui Folgefonn" class="img-fluid">
				<div id="productPreviewImages" class="d-flex mt-3">
					<img src="images/folgefonn.jpg" alt="folgefonn">
					<img src="images/folgefonn_front.jpg" alt="folgefonn front">
					<img src="images/folgefonn_zij.jpg" alt="folgefonn zij">
					<img src="images/folgefonn_back.jpg" alt="folgefonn back">
				</div>
			</div>
			<div id="productDesc" class="col-12 col-md-4 col-lg-5">
				<h1 class="headerColor text-center text-md-left">Noorse trui Folgefonn</h1>
				<h2 class="text-center text-md-left">Dames- en herentrui</h2>
				<p class="font-weight-bold">Draag "de warmte van Noorwegen" met Folgefonn, een sportieve Noorse trui met wol gevoerde leren kraag en
					korte rits, op de borst een wollen vilt patroon.</p>
				<p>Erg mooi! Eerste kwaliteit sterke Noorse wol en gemaakt in Noorwegen, u koopt een authentieke 'ouderwetse'
					Noorse trui!! ...en dus niet een produkt uit China of Nepal gemaakt van Australische wol o.i.d.</p>
				<p>
					<a href="#">Zie rubriek productinformatie </a>voor wasvoorschriften.</p>
				<p class="font-weight-italic">Van 'een Susan Fosse' heeft u jarenlang plezier!</p>
			</div>
			<div id="productCheckout" class="col-md-4 col-lg-3 mb-4">
				<div id="price" class="mb-4">
					<p class="font-weight-bold">
						<s>€ 239,95</s>
					</p>
					<h3 id="discountedPrice" class="font-weight-bold">€ 199,95</h3>
				</div>
				<div id="size" class="mb-3">
					<h4 class="font-weight-bold d-inline mr-3 mr-lg-3 align-middle">Maat</h4>
					<div id="sizeBtns" class="d-inline d-md-block">
						<button type="button" class="btn">S</button>
						<button type="button" class="btn">M</button>
						<button type="button" class="btn">L</button>
						<button type="button" class="btn">XL</button>
						<button type="button" class="btn">XXL</button>
					</div>
				</div>
				<div id="quantity" class="mb-4">
					<h4 class="font-weight-bold d-inline mr-2 d-inline align-middle">Aantal</h4>
					<div id="quantitySelector" class="d-inline">
						<button id="minusBtn" type="button" class="btn btn-sm selected disabled">
							<span class="oi oi-minus align-middle"></span>
						</button>
						<input aria-label="Input product amount" type="number" class="border border-dark px-2 py-1 align-middle"></input>
						<button id="plusBtn" type="button" class="btn btn-sm selected">
							<span class="oi oi-plus align-middle"></span>
						</button>
					</div>
				</div>
				<div id="addToShoppingcart" class="text-center text-md-left mt-3 mb-3">
					<button type="button" class="btn text-white p-2">
						<h5 class="font-weight-bold">In winkelmandje</h5>
					</button>
				</div>
				<div id="productPaymentInfo" class="text-center text-md-left">
					<ul class="list-unstyled">
						<li class="mb-3">
							<span class="oi oi-check"></span> Gratis verzending, vanaf 90 euro</li>
						<li class="mb-3">
							<span class="oi oi-check"></span> Voor 15:00 besteld, morgen in huis!</li>
						<li class="mb-3">
							<span class="oi oi-check"></span> Kostenloos retourneren in 14 dagen</li>
						<li>
							<span class="oi oi-check"></span> Veilig betalen met iDeal en PayPal</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3" id="contactInfo">
				<h3 class="text-center text-lg-left pl-3 pl-lg-0 headerColor">Contact</h3>
				<div class="text-center text-lg-left pl-4 pl-lg-0" id="telNr">
					<img class="contactIcon" src="images/Mobile-Phone-1-icon.png" alt="Telephone number: ">
					<span class="font-weight-bold">
						0512-841235
					</span>
				</div>
				<div class="text-center text-lg-left pl-4 pl-lg-0" id="email">
					<img class="contactIcon" src="images/Mail-2-icon.png" alt="Email: ">
					<span>
						Stuur een bericht
					</span>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 text-center text-lg-left mb-3" id="starReviews">
				<h3 class="text-center text-lg-left pl-3 pl-lg-0 headerColor">Klantbeoordelingen
				</h3>
				<div class="mx-auto" id="unratedStars">
					<div id="ratedStars">

					</div>
				</div>
				<div id="avgRating">
					<h3 class="font-weight-bold text-center">
						8.9
					</h3>
				</div>
				<div id="reviewsTotal">
					<h4 class="font-weight-bold text-center">
						24 beoordelingen
					</h4>
				</div>
			</div>
			<div class="col-12 col-lg-4" id="textReview">
				<h3 class="text-center text-lg-left pl-3 pl-lg-0 headerColor">Klantreacties
				</h3>
				<div id="reviewText">
					<p class="font-italic text-center text-lg-left">
						"Na telefonisch advies te hebben ontvangen ontvingen we de trui van prachtige kwaliteit een dag later! Een tweede trui werd
						alvast toegestuurd om zeker te zijn van de goede maat: wat een goede service en geweldige behandeling!
						Hartelijk dank. - we houden de collectie in de gaten voor ons en ..... voor de kleinkinderen !"-
						Inge
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
	<script src="scripts/product.min.js"></script>
</body>

</html>