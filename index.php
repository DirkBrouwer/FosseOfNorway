<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108371224-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-108371224-2');
	</script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">

	<title>Fosse of Norway home page</title>
	<meta name="description" content="Fosse of Norway home page">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
	    crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css"
	    integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
	<link rel="stylesheet" href="styles/index.css">

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Corporation",
			"url": "http://dirkbrouwer.student.fcict.nl/examenFE/index.php",
			"logo": "http://dirkbrouwer.student.fcict.nl/examenFE/images/logo-fosseofnorway.png",
			"name": "Fosse of Norway",
			"description": "Noorse truien en Noorse vesten - Fosse of Norway, de warmte van Noorwegen!",
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": "8.9",
				"reviewCount": "24",
				"bestRating": "10",
				"worstRating": "1"
			},
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "+31 0512 84 12 35 ",
				"email": "info@fosseofnorway.nl",
				"contactType": "Sales contact point"
			}
		}
	</script>
</head>

<body>
	<header role="banner" class="container-fluid">
		<?php include 'header.php';?>
	</header>
	<main role="main" class="container">
		<div class="mb-3" id="productImages">
			<div class="justify-content-md-center">
				<div id="productCategoryCarousel" class="carousel slide lazy row d-lg-none" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#productCategoryCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#productCategoryCarousel" data-slide-to="1"></li>
						<li data-target="#productCategoryCarousel" data-slide-to="2"></li>
						<li data-target="#productCategoryCarousel" data-slide-to="3"></li>
						<li data-target="#productCategoryCarousel" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 productImageCarousel img-fluid" src="images/noorse-truien.jpg" alt="First slide">
							<div class="carousel-caption">
								<h1>Noorse truien</h1>
							</div>
						</div>
						<div class="carousel-item">
							<a href="category.php">
								<img class="d-block w-100 productImageCarousel img-fluid" data-src="images/noorse-vesten.jpg" alt="Second slide">
								<div class="carousel-caption">
									<h1>Noorse vesten</h1>
								</div>
							</a>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 productImageCarousel img-fluid" data-src="images/noorse-sjaals.jpg" alt="Third slide">
							<div class="carousel-caption">
								<h1>Noorse sjaals</h1>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 productImageCarousel img-fluid" data-src="images/noorse-mutsen.jpg" alt="Third slide">
							<div class="carousel-caption">
								<h1>Noorse mutsen</h1>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 productImageCarousel img-fluid" data-src="images/noorse-kinderkleding.jpg" alt="Third slide">
							<div class="carousel-caption">
								<h1>Noorse kinderkleding</h1>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#productCategoryCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#productCategoryCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="d-none d-lg-block">
					<div class="row justify-content-center mb-3">
						<div class="col-lg-5 col-xl-6">
							<div id="productImage1" class="productImage mr-lg-4 mr-xl-0">
								<div class="categoryDesc">
									<h1>Noorse truien</h1>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-xl-6">
							<a href="category.php">
								<div id="productImage2" class="productImage mr-lg-4 mr-xl-0">
									<div class="categoryDesc">
										<h1>Noorse vesten</h1>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row justify-content-center mb-5">
						<div class="col-lg-4">
							<div id="productImage3" class="productImage">
								<div class="categoryDesc">
									<h1>Noorse sjaals</h1>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div id="productImage4" class="productImage">
								<div class="categoryDesc">
									<h1>Noorse mutsen</h1>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div id="productImage5" class="productImage">
								<div class="categoryDesc">
									<h1>Noorse kinderkleding</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3" id="contactInfo">
				<h2 class="text-center text-lg-left pl-3 pl-lg-0 headerColor">Contact</h2>
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
				<h2 class="text-center text-lg-left pl-3 pl-lg-0 headerColor">Klantbeoordelingen
				</h2>
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
					<p class="font-weight-bold text-center">
						24 beoordelingen
					</p>
				</div>
			</div>
			<div class="col-12 col-lg-4" id="textReview">
				<h2 class="text-center text-lg-left pl-3 pl-lg-0 headerColor">Klantreacties
				</h2>
				<div id="reviewText">
					<p class="font-italic text-center text-lg-left">
						"Na telefonisch advies te hebben ontvangen ontvingen we de trui van prachtige kwaliteit een dag later! Een tweede trui werd
						alvast toegestuurd om zeker te zijn van de goede maat: wat een goede service en geweldige behandeling! Hartelijk dank.
						- we houden de collectie in de gaten voor ons en ..... voor de kleinkinderen !"- Inge
					</p>
				</div>
			</div>
		</div>
		</div>
		<div class="text-center text-lg-left">
			<h3 class="headerColor">Populaire Noorse kleding</h3>
		</div>
		<div class="row justify-content-center d-lg-none">
			<div id="popularProductsCarousel" class="carousel slide lazy mb-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#popularProductsCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#popularProductsCarousel" data-slide-to="1"></li>
					<li data-target="#popularProductsCarousel" data-slide-to="2"></li>
					<li data-target="#popularProductsCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active popularProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" src="images/hemsedal_rood_front.jpg" alt="First slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold">€ 219,95</h4>
							</div>
						</div>
					</div>
					<div class="carousel-item popularProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" data-src="images/bryggen_wit_front.jpg" alt="Second slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold">€ 219,95</h4>
							</div>
						</div>
					</div>
					<div class="carousel-item popularProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" data-src="images/fosse006.jpg" alt="Third slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold">€ 219,95</h4>
							</div>
						</div>
					</div>
					<div class="carousel-item popularProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" data-src="images/sandviken_blauw_front.jpg" alt="Fourth slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold">€ 219,95</h4>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#popularProductsCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#popularProductsCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="row d-none d-lg-flex text-center mb-md-4" id="popularProducts">
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/hemsedal_rood_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen rood">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor font-weight-bold">€ 219,95</h4>
			</div>
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor font-weight-bold">€ 219,95</h4>
			</div>
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor font-weight-bold">€ 219,95</h4>
			</div>
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor font-weight-bold">€ 219,95</h4>
			</div>
		</div>
		<div class="text-center text-lg-left">
			<h3 class="headerColor">Aanbiedingen</h3>
		</div>
		<div class="row d-none d-lg-flex text-center" id="discountedProducts">
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/hemsedal_rood_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen rood">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor text-muted">
					<s>€ 219,95</s>
				</h4>
				<h4 class="headerColor font-weight-bold">€ 199,95</h4>
			</div>
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/bryggen_wit_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen wit">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor text-muted">
					<s>€ 219,95</s>
				</h4>
				<h4 class="headerColor font-weight-bold">€ 199,95</h4>
			</div>
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/fosse006.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen zwart">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor text-muted">
					<s>€ 219,95</s>
				</h4>
				<h4 class="headerColor font-weight-bold">€ 199,95</h4>
			</div>
			<div class="popularProduct col-md-3">
				<img class="popularProductImg" data-src="images/sandviken_blauw_front.jpg" src="images/placeholder.gif" alt="Noors vest Bryggen blauw">
				<h3 class="headerColor">Noors vest Bryggen</h3>
				<h4 class="headerColor text-muted">
					<s>€ 219,95</s>
				</h4>
				<h4 class="headerColor font-weight-bold">€ 199,95</h4>
			</div>
		</div>
		<div class="row justify-content-center d-lg-none">
			<div id="discountedProductsCarousel" class="carousel slide lazy mb-2 " data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#discountedProductsCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#discountedProductsCarousel" data-slide-to="1"></li>
					<li data-target="#discountedProductsCarousel" data-slide-to="2"></li>
					<li data-target="#discountedProductsCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active discountedProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" src="images/hemsedal_rood_front.jpg" alt="First slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold text-muted">
									<s>€ 219,95</s>
								</h4>
								<h4 class="font-weight-bold">
									€ 199,95
								</h4>
							</div>
						</div>
					</div>
					<div class="carousel-item discountedProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" data-src="images/bryggen_wit_front.jpg" alt="Second slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold text-muted">
									<s>€ 219,95</s>
								</h4>
								<h4 class="font-weight-bold">
									€ 199,95
								</h4>
							</div>
						</div>
					</div>
					<div class="carousel-item discountedProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" data-src="images/fosse006.jpg" alt="Third slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold text-muted">
									<s>€ 219,95</s>
								</h4>
								<h4 class="font-weight-bold">
									€ 199,95
								</h4>
							</div>
						</div>
					</div>
					<div class="carousel-item discountedProductsImg">
						<img class="d-block w-100 mx-auto productImageCarousel" data-src="images/sandviken_blauw_front.jpg" alt="Fourth slide">
						<div class="carousel-caption">
							<div class="captionText">
								<h3>Noors vest Bryggen</h3>
								<h4 class="font-weight-bold text-muted">
									<s>€ 219,95</s>
								</h4>
								<h4 class="font-weight-bold">
									€ 199,95
								</h4>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#discountedProductsCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#discountedProductsCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
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
	<script src="scripts/jquery.bcSwipe.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js" integrity="sha256-D0J9D4igaYyVX/Y78Tr0yoDJsy8hi14hCEdFDakBp08="
	    crossorigin="anonymous"></script>
	<script src="scripts/index.min.js"></script>

</body>

</html>