<?php require_once('public/inc/header.inc.php'); ?>
	<!-- Projects Section -->
	<section id="projects" class="projects-section bg-light">
		<div class="container">

			<!-- Featured Project Row -->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-8 col-lg-7">
					<img class="img-fluid mb-3 mb-lg-0" src="public/img/project.png" alt="project">
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-center text-lg-left">
						<h4>PROJECTS</h4>
						<p class="text-black-50 mb-0">Porject en cours (...) </p>
					</div>
				</div>
			</div>

			<!-- Portfolio Grid -->
			<section class="bg-light page-section" id="portfolio">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="view/projects/boxe/img/graphisme-catalogue.png" alt="boxe">
							</a>
							<div class="portfolio-caption">
								<h4>boxe</h4>
								<p class="text-muted">site statique</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="view/projects/jurassic-World/TP6_jurassic_maquette.png" alt="jurassic">
							</a>
							<div class="portfolio-caption">
								<h4>Jurassic World</h4>
								<p class="text-muted">site statique</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="view/projects/tp/preview.jpg" alt="tp">
							</a>
							<div class="portfolio-caption">
								<h4>cv</h4>
								<p class="text-muted">site statique</p>
							</div>
						</div>
						<!-- <div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Lines</h4>
								<p class="text-muted">Branding</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Southwest</h4>
								<p class="text-muted">Website Design</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 portfolio-item">
							<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
								<div class="portfolio-hover">
									<div class="portfolio-hover-content">
										<i class="fas fa-plus fa-3x"></i>
									</div>
								</div>
								<img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
							</a>
							<div class="portfolio-caption">
								<h4>Window</h4>
								<p class="text-muted">Photography</p>
							</div>
						</div> -->
					</div>
				</div>
			</section>
		</div>
		<!-- /Fin de container -->

		<!-- Portfolio Modals -->
		<!-- Modal 1 -->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<!-- Project Details Go Here -->
									<h2 class="text-uppercase">Boxe</h2>
									<p class="item-intro text-muted">visuel d'un site boutique de boxe</p>
									<img class="img-fluid d-block mx-auto" src="view/projects/boxe/img/graphisme-catalogue.png" alt="boxe">
									<p>Ici le sujet était de reproduire au mieux le visuel du site client d'une boutique de vente de produit de vente</p>
									<a href="view/projects/boxe/controle.html" class="mx-2" target="bank">
          								<i class="fas fa-link"></i>
        							</a>
									<ul class="list-inline">
										<li>Date: Juin 2019</li>
										<li>Client: WF3</li>
										<li>Language utilisé: évaluation HTML/CSS</li>
									</ul>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
										Close Project
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 2 -->
		<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<!-- Project Details Go Here -->
									<h2 class="text-uppercase">Jurassic World</h2>
									<p class="item-intro text-muted">visuel d'une bielleterie pour une exposition</p>
									<img class="img-fluid d-block mx-auto" src="view/projects/Jurassic-World/TP6_jurassic_maquette.png" alt="jurassic">
									<p>Ici le sujet était de reproduire au mieux le visuel d'une billeterie pour un évènement</p>
									<a href="view/projects/Jurassic-World/jurassic_world.html" class="mx-2" target="bank">
          								<i class="fas fa-link"></i>
        							</a>
									<ul class="list-inline">
										<li>Date: Juin 2019</li>
										<li>Client: POLES</li>
										<li>Language utilisé: HTML/CSS - js</li>
									</ul>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
										Close Project
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 3 -->
		<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<!-- Project Details Go Here -->
									<h2 class="text-uppercase">CV</h2>
									<p class="item-intro text-muted">reproduire au mieux un site cv</p>
									<img class="img-fluid d-block mx-auto" src="view/projects/tp/preview.jpg" alt="CV">
									<p>Ici le sujet était de reproduire au mieux un site cv</p>
									<a href="view/projects/tp/tp9.html" class="mx-2" target="bank">
          								<i class="fas fa-link"></i>
        							</a>
									<ul class="list-inline">
										<li>Date: Juin 2019</li>
										<li>Client: POLES</li>
										<li>language utilisé: HTML/CSS - js</li>
									</ul>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
										Close Project
									</button>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>

		<!-- Modal 4 -->
		<!-- <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body"> -->
									<!-- Project Details Go Here -->
									<!-- <h2 class="text-uppercase">Project Name</h2>
									<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
									<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
									<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
									<ul class="list-inline">
										<li>Date: January 2017</li>
										<li>Client: Lines</li>
										<li>Category: Branding</li>
									</ul>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
										Close Project
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Modal 5 -->
		<!-- <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body"> -->
									<!-- Project Details Go Here -->
									<!-- <h2 class="text-uppercase">Project Name</h2>
									<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
									<img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
									<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
									<ul class="list-inline">
										<li>Date: January 2017</li>
										<li>Client: Southwest</li>
										<li>Category: Website Design</li>
									</ul>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
										Close Project
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Modal 6 -->
		<!-- <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body"> -->
									<!-- Project Details Go Here -->
									<!-- <h2 class="text-uppercase">Project Name</h2>
									<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
									<img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
									<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
									<ul class="list-inline">
										<li>Date: January 2017</li>
										<li>Client: Window</li>
										<li>Category: Photography</li>
									</ul>
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
										Close Project
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</section>
<?php require_once('public/inc/footer.inc.php'); ?>
