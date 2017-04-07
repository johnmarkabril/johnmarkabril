<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Projects</h2>
            </div>
        </div>
        <div class="row">
        <?php
            if ( !empty($get_all_projects) ) {
                foreach ( $get_all_projects as $gap ) :
        ?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="">
                            <img src="<?php echo base_url(); ?>public/img/projects/<?php echo $gap->IMAGEURL;?>" class="img-responsive" alt="" style="width: 360px; height:260px;">
                        </a>
                        <div class="portfolio-caption">
                            <h4><?php echo $gap->TITLE; ?></h4>
                            <p class="text-muted"><?php echo $gap->SUBTITLE; ?></p>
                        </div>
                    </div>
        <?php
                endforeach;
            }
        ?>
        </div>
    </div>
</section>