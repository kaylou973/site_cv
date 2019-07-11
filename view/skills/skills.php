<?php require_once('public/inc/header.inc.php'); ?>

<!-- Projects Section -->
<section id="competence" class="projects-section bg-light">
	<div class="container">


		<!-- Featured Project Row -->
		<div class="row align-items-center no-gutters mb-4 mb-lg-5">
			<div class="col-xl-8 col-lg-7">
				<img class="img-fluid mb-3 mb-lg-0 w-100" src="public/img/competence.jpg" alt="competence">
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="featured-text text-center text-lg-left">
					<h4>Compétence</h4>
					<p class="text-black-50 mb-0">J'ai su exploiter mon potentiel afin de pouvoir acquérir des compétences suffisantes pour vous rejoindre !</p>
				</div>
			</div>
		</div>
		<?php foreach ($skills as $skill) :  ?>
				<h4><?php echo $skill->name;  ?></h4>
				<div class="progress">
					<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill->level;  ?>%"></div>
				</div>
		<?php endforeach; ?>
	</div>
</section>