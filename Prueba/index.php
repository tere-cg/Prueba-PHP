<?php
include 'includes/conecta.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Cielo Negro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="script.js"></script>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
					</div>
					<div class="container-brand">
						<h1 class="container-brand">Cielo Negro</h1>
					</div>
					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="#products">Nuestros Productos</a></li>
						<li><a href="#gallery">Galería</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="banner">
			<div class="content-banner">
				<h2>Día de promociones</h2>
				<p>Galletas de regalo a partir de un café mediano</p>
				<a href="#products">Comprar ahora</a>
			</div>
		</section>

		<main class="main-content">
			<br>
			<section id="products" class="container top-products">
				<h1 class="heading-1">Nuestros Productos</h1>
				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-chico.jpg" alt="Café Chico" />
						</div>
						<div class="content-card-product">	
							<span>
								<h3>Café Chico</h3>
								<select id="cafeChicoCant" class="quantity-select">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</span>
							<span>
								<h3>$10.00</h3>
								<button type="button" class="btn btn-outline add-cart" id="liveToastBtn1" onclick="addCafeChico()">Agregar</button>
							</span>	
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-mediano.jpg" alt="Café Mediano" />
						</div>
						<div class="content-card-product">
							<span>
								<h3>Café Mediano</h3>
								<select id="cafeMedianoCant" class="quantity-select">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</span>
							<span>
								<h3>$15.00</h3>
								<button type="button" class="btn btn-outline add-cart" id="liveToastBtn2" onclick="addCafeMediano()">Agregar</button>
							</span>	
						</div>
					</div>
					<!-- Producto 3 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-grande.jpg" alt="Café Grande" />
						</div>
						<div class="content-card-product">					
							<span>
								<h3>Café Grande</h3>
								<select id="cafeGrandeCant" class="quantity-select">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</span>
							<span>
								<h3>$20.00</h3>
								<button type="button" class="btn btn-outline add-cart" id="liveToastBtn3" onclick="addCafeGrande()">Agregar</button>
							</span>	
						</div>
					</div>
					<!-- Producto 4 -->
					<div class="card-product">
						<div class="container-img">
							<img src="img/cafe-jumbo.jpg" alt="Café Jumbo" />
						</div>
						<div class="content-card-product">
							<span>
								<h3>Café Jumbo</h3>
								<select id="cafeJumboCant" class="quantity-select">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</span>
							<span>
								<h3>$25.00</h3>
								<button type="button" class="btn btn-outline add-cart" id="liveToastBtn4" onclick="addCafeJumbo()">Agregar</button>
							</span>	
						</div>
					</div>
				</div>
				<div class="container-hero2">
					<div class="container hero2">
						<div class="col-5">

						</div>
						<div class="col">
							<button type="button" class="btn btn-outline add-cart" onclick="mostrarTotal()" data-bs-toggle="modal" data-bs-target="#modal">Total de la compra</button>
						</div>
						
					</div>					
				</div>				
			</section>

			<section id="gallery" class="gallery">
				<img src="img/gallery1.jpg" alt="Gallery Img1" class="gallery-img-1" />
				<img src="img/gallery2.jpg" alt="Gallery Img2" class="gallery-img-2" />
				<img src="img/gallery3.jpg" alt="Gallery Img3" class="gallery-img-3" />
				<img src="img/gallery4.jpg" alt="Gallery Img4" class="gallery-img-4" />
				<img src="img/gallery5.jpg" alt="Gallery Img5" class="gallery-img-5" />
			</section>
		</main>

		<footer class="footer">
			<div class="container container-footer">

				<div class="contact-info">
					<p class="title-footer">Información de Contacto</p>
					<ul>
						<li>Dirección: Av. Vermont 356 Col. Rosales</li>
						<li>Teléfono: 123-456-7890</li>
						<li>Correo: contacto@cielonegro.com</li>
					</ul>
				</div>

				<div class="copyright">
					<p>
						Desarrollado por Teresa Cabrera &copy; | 2023
					</p>
				</div>
			</div>
		</footer>

		<!-- TOASTS & MODAL -->
		<div class="toast-container position-fixed bottom-0 end-0 p-3">
			<div id="liveToast1" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			  <div class="toast-header">
				<strong class="me-auto">Carrito</strong>
				<small>Ahora</small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			  </div>
			  <div class="toast-body">
				<h3>El producto ha sido agregado al carrito</h3>
			  </div>
			</div>
		  </div>
	  
		  <div class="toast-container position-fixed bottom-0 end-0 p-3">
			<div id="liveToast2" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			  <div class="toast-header">
				<strong class="me-auto">Carrito</strong>
				<small>Ahora</small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			  </div>
			  <div class="toast-body">
				<h3>El producto ha sido agregado al carrito</h3>
			  </div>
			</div>
		  </div>    
	  
		  <div class="toast-container position-fixed bottom-0 end-0 p-3">
			<div id="liveToast3" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			  <div class="toast-header">
				<strong class="me-auto">Carrito</strong>
				<small>Ahora</small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			  </div>
			  <div class="toast-body">
				<h3>El producto ha sido agregado al carrito</h3>
			  </div>
			</div>
		  </div>      
	  
		  <div class="toast-container position-fixed bottom-0 end-0 p-3">
			<div id="liveToast4" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			  <div class="toast-header">
				<strong class="me-auto">Carrito</strong>
				<small>Ahora</small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			  </div>
			  <div class="toast-body">
				<h3>El producto ha sido agregado al carrito</h3>
			  </div>
			</div>
		  </div>

		<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header"> 
				  <h1 class="modal-title fs-5 heading-1" id="exampleModalLabel">Resumen de la orden</h1>
				</div>
				<div class="modal-body">
					<p>Café Chico: <span id="cafeChicoComprado"></span></p>
					<p>Café Mediano: <span id="cafeMedianoComprado"></span></p>
					<p>Café Grande: <span id="cafeGrandeComprado"></span></p>
					<p>Café Jumbo: <span id="cafeJumboComprado"></span></p>
					<h3>Total de la compra: $<span id="resultado"></span></h3>
					<h3>Usted debe entregar: <span id="galletas-regaladas">0</span> galletas y <span id="paquete-galletas-regaladas">0</span> paquete(s) de galletas</h3>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-outline add-cart" data-bs-dismiss="modal">Aceptar</button>
				</div>      
			</div>
		</div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="script.js"></script>
		<script src="toast.js"></script>
		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>