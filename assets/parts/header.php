<!--===============================================================================================-->	
<!-- *************ORBIT TECH SHOP -- Version 1.2.0 -- PARTIE HEADER -->
<!--===============================================================================================-->	

<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="/ORBITTECHSHOP/index.php" class="site-logo">
							<img src="/ORBITTECHSHOP/img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" name="q" placeholder="Rechercher sur Orbit Tech Shop ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<?php if ($_SESSION != null && isset($_SESSION['logdatabase'])) {
									echo'<i class="flaticon-profile"></i>	
										 <a href="#" class="dropdown-toggle" type="text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										 '.$_SESSION['Pseudo'].'
									   </a>
									   <div class="dropdown-menu">
									   		<a class="dropdown-item" href="#">Afficher Email <span class="userimg">METTRE IMAGE</span></a>
									   		<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Editer mon Profil</a>
											<a class="dropdown-item" href="#">Historique Achat</a>
											<a class="dropdown-item" href="#">Livraison en Cours</a>
											<a class="dropdown-item" href="#">Parametre du Compte</a>
											<a class="dropdown-item" href="#">Nous Contacter</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="/ORBITTECHSHOP/assets/parts/loginpage/verify.php?logout=1">DECONNEXION</a>
									   </div>';
									}else {
										echo '<i class="flaticon-profile"></i>
										<a href="/ORBITTECHSHOP/assets/parts/loginpage/index.php">Se Connecter</a> ou <a href="#">S\'inscrire</a>';
								}
								?>   
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="/ORBITTECHSHOP/?page=cart">Mon Panier</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ===== |NAV MENU| =====-->
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="?page=home" active>Accueil</a></li>
								<!--  -->
					<li><a href="?page=category">Ordinateurs</a>
						<ul class="sub-menu">
								<li class="dropdown dropright"><a href="" class="dropdown-toggle" onclick="location.href = '?page=category&cat=laptop';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-laptop"  id="submenu-icon"></i>
									Ordinateur Portable</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<!-- <div class="row">	 -->
											<!-- <div class="col text-center"> -->
												<div class="dropdown-header">Dropdown header 1</div>
												<li><a href="?page=product">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
											<!-- </div> -->
											<!-- <div class="col text-center"> -->
												<div class="dropdown-header">Dropdown header 1</div>
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="dropdown dropright">
													<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
													<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
														<div class="dropdown-header">Dropdown header 2</div>
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="dropdown dropright">
															<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>
															<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
																<div class="dropdown-header">Dropdown header 3</div>
																<li><a href="#">Action</a></li>
																<li><a href="#">Another action</a></li>
																<li><a href="#">Something else here</a></li>
															</ul>
														</li>
													</ul>
												</li>
											<!-- </div>											 -->
										<!-- </div> -->
									</ul>
								</li>
								<li><a href="#"><i class="fas fa-desktop" id="submenu-icon"></i> Ordinateur de Bureau</a></li>
								<li><a href="#"><i class="fas fa-gamepad" id="submenu-icon"></i> Ordinateur de Gaming</a></li>
								<li><a href="#"><i class="far fa-square"  id="submenu-icon"></i> Ordinateur Tactile</a></li>
						</ul>
					</li>
								<!--  -->
					<li><a href="?page=category">Smartphones & Tablettes</a>
						<ul class="sub-menu">
								<li><a href="#"><i class="fas fa-mobile" id="submenu-icon"></i> Smartphones/Mobiles</a></li>
								<!-- ============= -->
								
								<!-- ================= -->
								<li><a href="#"><i class="fas fa-tablet-alt" id="submenu-icon"></i> Tablettes</a></li>
								<li><a href="#"><i class="fas fa-phone-volume" id="submenu-icon"></i> Téléphonie d'Entreprise</a></li>
								<li><a href="#"><i class="fab fa-connectdevelop" id="submenu-icon"></i> Objet Connecté</a></li>
						</ul>
					</li>

								<!--  -->
					<li><a href="?page=category">Bureautique</a>
						<ul class="sub-menu">
							<li><a href="#">Imprimantes</a></li>
							<li><a href="#">Consommables</a></li>
							<li><a href="#">Fournitures de Bureau</a></li>
						</ul>
					</li>

								<!--  -->
					<li><a href="?page=category">Consoles
							<span class="new">New</span>
						</a>
						<ul class="sub-menu">
							<li><a href="#">PLAYSTATIONS</a></li>
							<li><a href="#">XBOX</a></li>
							<li><a href="#">Nintendo</a></li>
							<li><a href="#">Wii</a></li>
						</ul>
					</li>

								<!--  -->
					<li><a href="?page=category">Accessoires</a>
						<ul class="sub-menu">
							<li><a href="#">Domotique</a></li>
							<li><a href="#">Périphériques PC</a></li>
							<li><a href="#">Moniteur</a></li>
							<li><a href="#">Tour/Boitier</a></li>
							<li><a href="#">Stockage | Sauvegarde</a></li>
							<li><a href="#">Image et Son</a></li>
							<li><a href="#">Câble et Connectique</a></li>
							<li><a href="#">Réseau | Serveur</a></li>
							<li><a href="#">Maintenance | Bricolage</a></li>
						</ul>
					</li>
								<!--  -->
					<li><a href="?page=category">Services</a>
						<ul class="sub-menu">
							<li><a href="#">Réparation</a></li>
							<li><a href="#">Installation</a></li>
							<li><a href="#">Logiciel</a></li>
						</ul>
					</li>

								<!-- CONTACT  -->
					<!-- <li><a href="?page=contact">Nous Contacter</a></li> -->
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

<!-- ========== >OrbitTurner Says: -> END OF FILE😜  ========== -->
