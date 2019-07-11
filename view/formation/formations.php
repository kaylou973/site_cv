<?php require_once('public/inc/header.inc.php'); ?>

<section id="formation" class="projects-section bg-light">
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0 w-100" src="public/img/formation.png" alt="formation">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>FORMATION - EDUCATION</h4>
                    <p class="text-black-50 mb-0">Des choix souvent difficile, mais qui m'auront amené à être moi !</p>
                </div>
            </div>
        </div>

        <section class="services" id="SERVICE">
            <div class="container">
                <div class="row">

        <?php foreach ($formations as $formation){ 
            $id = $formation->id_formation;
            if (($id % 2) == 0){
        ?>  

                <div class="col-md-4 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2><?php echo $formation->year; ?> - <?php echo $formation->level; ?></h2>
                        <h6><?php echo $formation->school; ?></h6>
                        <p><?php echo $formation->speciality; ?></p>
                    </div>
                </div>
            
        <?php } else { ?>

                <div class="col-md-4 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-magnifying-glass"></i>
                        <h2><?php echo $formation->year; ?> - <?php echo $formation->level; ?></h2>
                        <h6><?php echo $formation->school; ?></h6>
                        <p><?php echo $formation->speciality; ?></p>
                    </div>
                </div>
        <?php } } ?>

             </div>
        </div>
    </section>
    </div>
</section>