<!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">As a web developer, it exceptionally appreciates to code and makes a site particularly if that site is more unpredictable and useable. I've delighted in making a site in light of being fundamental.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php
                        if ( !empty($get_all_about) ) {
                            $ctr = 1;
                    ?>
                            <ul class="timeline">
                            <?php
                                foreach ( $get_all_about as $gaa ) :
                                    if ( $ctr == 1 ) {
                            ?>
                                        <li>
                                            <div class="timeline-image">
                                                <img class="img-circle img-responsive" src="<?php echo base_url(); ?>public/img/ojt.jpg" alt="">
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4><?php echo $gaa->TITLE;?></h4>
                                                    <h4 class="subheading"><?php echo $gaa->SUBTITLE;?></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="text-muted"><?php echo $gaa->DESCRIPTION;?></p>
                                                </div>
                                            </div>
                                        </li>
                            <?php
                                        $ctr++;
                                    } else {
                            ?>
                                        <li class="timeline-inverted">
                                            <div class="timeline-image">
                                                <img class="img-circle img-responsive" src="<?php echo base_url(); ?>public/img/graduate.jpg" alt="">
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4><?php echo $gaa->TITLE;?></h4>
                                                    <h4 class="subheading"><?php echo $gaa->SUBTITLE;?></h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="text-muted"><?php echo $gaa->DESCRIPTION;?></p>
                                                </div>
                                            </div>
                                        </li>
                            <?php
                                        $ctr--;
                                    }
                                endforeach;
                            ?>
                            </ul>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
