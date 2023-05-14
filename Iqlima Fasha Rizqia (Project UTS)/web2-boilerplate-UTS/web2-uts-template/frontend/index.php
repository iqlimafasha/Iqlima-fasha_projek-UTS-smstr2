<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Shop Homepage - Start Bootstrap Template</title>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
		<!-- Bootstrap icons-->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
			rel="stylesheet"
		/>
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container px-4 px-lg-5">
				<a class="navbar-brand" href="#!">Toko Pakaian</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="../backend/tipe_pakaian.php">Tipe Pakaian</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="../backend/pesanan.php">Pesanan</a></li>
						<li class="nav-item dropdown">
							<a
								class="nav-link "
									
								href="../backend/pakaian.php"
								role="button"
								aria-expanded="false"
								>Pakaian</a
							>
							
						</li>
					</ul>
					<form class="d-flex">
						<button class="btn btn-outline-dark" type="submit">
							<i class="bi-cart-fill me-1"></i>
							Cart
							<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
						</button>
					</form>
				</div>
			</div>
		</nav>
		<!-- Header-->
		<header class="bg-dark py-5">
			<div class="container px-4 px-lg-5 my-5">
				<div class="text-center text-white">
					<h1 class="display-4 fw-bolder">Toko Pakaian qia</h1>
					<p class="lead fw-normal text-white-50 mb-0">Pakaian dengan fashion kekinian</p>
				</div>
			</div>
		</header>
		<!-- Section-->
		<section class="py-5">
			<div class="container px-4 px-lg-5 mt-5">
				<div
					class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
				>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/4/6/1727004/1727004_2db4b122-9e4d-4910-8940-0a580e7f4ef2_540_540.jpg"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Jaket</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>Rp225.000</span
									>
									Rp200.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Disc 50%
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="https://id-live-01.slatic.net/p/ae10f2da3b364f581f08bfd84c3761b7.jpg"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Kaos</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>Rp60.000</span
									>
									Rp30.0000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="https://cf.shopee.co.id/file/1a82b8939037dd2a40b7cc0b17bb511b"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Celana</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>Rp97.500</span
									>
									Rp85.000
								</div>
							</div>
						</div>
					</div>
					
		</section>
		<!-- Footer-->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">
					Copyright &copy; Your Website 2023
				</p>
			</div>
		</footer>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
	</body>
</html>
