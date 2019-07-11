<?php require_once('public/inc/header.inc.php');
?>
<!-- Projects Section -->
<section id="experience" class="projects-section bg-light">
	<div class="container">
		<!-- Featured Project Row -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
			<div class="col-xl-8 col-lg-7">
				<img class="img-fluid mb-3 mb-lg-0 w-100" src="public/img/experience.jpg" alt="experience">
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="featured-text text-center text-lg-left">
					<h4>Experience</h4>
					<p class="text-black-50 mb-0">Parcours diverse et varié assez dense pour avoir enrichie mon expérience et mon travail en équipe !</p>
				</div>
			</div>
		</div>
		<?php
		foreach ($experiences as $experience) {
			$id = $experience->id_experience;

			if (($id % 2) == 0) {
				// echo $id . "<br>";
				?>
				<!-- Project Two Row -->
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-6">
						<img class="img-fluid" src="public/img/demo-image-02.jpg" alt="">
					</div>
					<div class="col-lg-6 order-lg-first">
						<div class="bg-black text-center h-100 project">
							<div class="d-flex h-100">
								<div class="project-text w-100 my-auto text-center text-lg-right">
									<h4 class="text-white"><?php echo $experience->name; ?></h4>
									<h6 class="text-white"><?php echo $experience->years; ?></h6>
									<p class="mb-0 text-white-50"><?php echo $experience->description; ?></p>
									<hr class="d-none d-lg-block mb-0 mr-0">
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		} else {
			?>
				<!-- Project One Row -->
				<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
					<div class="col-lg-6">
						<img class="img-fluid" src="public/img/demo-image-01.jpg" alt="">
					</div>
					<div class="col-lg-6">
						<div class="bg-black text-center h-100 project">
							<div class="d-flex h-100">
								<div class="project-text w-100 my-auto text-center text-lg-left">
									<h4 class="text-white"><?php echo $experience->name;  ?></h4>
									<h6 class="text-white"><?php echo $experience->years;  ?></h6>
									<p class="mb-0 text-white-50"><?php echo $experience->description;  ?></p>
									<hr class="d-none d-lg-block mb-0 ml-0">
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
		}
	}
	?>
	</div>
</section>