<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog :: Marcos Alves</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<!-- css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- aqui inicia o slide -->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/img_nature_wide.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/img_snow_wide.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/img_mountains_wide.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- aqui termina o slide -->

	<!-- aqui inicia o grupo de cards -->
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<?php foreach($results as $post): ?>
				<div class="col gy-5">
					<div class="card">
						<img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">
								<?= $post["title"] ?>
							</h5>
							<p class="card-text">
								<?= $post["description"] ?>
							</p>
							<a href="viewBlog.php?id=<?= $post["id"] ?>">
								<i class="fas fa-eye check-icon">Ver</i>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<!-- aqui termima o grupo de cards -->

</body>
</html>
