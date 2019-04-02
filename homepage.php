
<?php get_header(); 
/*
 Template Name: Home Page   
*/

?>

    <!--=== Page Content ===-->

    <!--=== About start ===-->
    <section id="about">
        <div class="bg-dark">
            <h1 class="text-light text-center pt-6"><?php echo get_field('about_title'); ?> </h1>
            <hr class="hr-lg w-10 hr-dark text-center">
            <div class="container d-flex justify-content-center">
                <div class="row col-10 col-lg-9 col-xl-9">
                    <h6 class="text-muted text-center pt-5 pb-6"><?php echo get_field('about_content'); ?></h6>
                    <div class="mx-auto pb-8">
                        <a href="#works" class="btn btn-outline-secondary btn-one js-scroll-trigger">CONTINUE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-solitude">
            <div class="row d-flex justify-content-center pt-7 pb-7" data-aos="fade-up">
                <?php while(has_sub_field('services')): ?>
                <div class="col-8 col-md-8 col-lg-3 col-xl-3 pb-5">
                    <div class="d-flex justify-content-center">
                        <i class="fa fa-<?php echo get_sub_field('icon'); ?> fa-3x icon-color"></i></div>
                    <div class="text-center pt-4">
                        <h4 class="text-dark"><?php echo get_sub_field('title'); ?></h4>
                        <h6 class="text-dark"><?php echo get_sub_field('content'); ?></h6>
                    </div>
                </div>
                <?Php endwhile; ?>
                
            </div>
        </div>
    </section>
    <!--=== About end ===-->


    <!--=== Works start ===-->
    <section id="works">
        <div class="col-12 text-center bg-dark pt-7 pb-5">
            <h1 class="text-light text-center"><?php echo get_field('works_title'); ?> </h1>
            <hr class="hr-lg w-10 hr-dark text-center">
        </div>
        <div class="row bg-solitude">
            <div class="col-12 col-md-12 col-lg-12 col-xl-7" data-aos="fade-right">
                <img class="img-fluid" src="<?php echo get_field('work_image'); ?>" alt="">
            </div>
            <div class="col-12 col-md-10 col-lg-10 col-xl-5 pl-4 pr-6" data-aos="fade-left">
                <h2 class="text-secondary pl-4 pt-10"><?php echo get_field('work_post_title'); ?></h2>
                <h6 class="text-dark pl-4 pt-3 pb-5"><?php echo get_field('work_desc'); ?></h6>
                <div class="pb-10 pl-4">
                    <a href="<?php echo get_field('works_readmore'); ?>" class="btn btn-outline-secondary btn-one" data-toggle="modal">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    <!--=== Work end ===-->


    <!--=== Pricing start ===-->
    <!--<section id="pricing">
        <div class="bg-solitude">
            <div class="col-12 text-center bg-dark pt-7 pb-5">
                <h1 class="text-light text-center"><?php echo get_field('price_title'); ?>  </h1>
                <hr class="hr-lg w-10 hr-dark text-center">
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="card-group pt-6 pb-9">

                        <?php while(has_sub_field('price')): ?>
                        <div class="col-12 col-lg-4 d-flex justify-content-center text-center pt-4 pb-2">
                            <div class="card-price card-outline-primary">
                                <div class="card-block bg-dark box-shadow">
                                    <h5 class="card-title text-muted pt-4"><?php echo get_sub_field('title'); ?></h5>
                                    <h5 class="card-title text-muted"><?php echo get_sub_field('amount'); ?></h5>
                                    <h6 class="card-text text-muted pb-1"><?php echo get_sub_field('date'); ?></h6>
                                    <hr class="w-20 hr-dark text-center">
                                    <ul class="list-unstyled pricing-list text-muted">
                                        <?php while(has_sub_field('details')): ?>
                                        <li>
                                            <h6><?php echo get_sub_field('text'); ?></h6></li>
                                        <?Php endwhile; ?>    
                                        
                                    </ul>
                                    <div class="pb-4">
                                        <a href="<?php echo get_sub_field('order_link'); ?>" class="btn btn-outline-secondary btn-one text-center" data-toggle="modal">Order Now</a></div>
                                </div>
                            </div>
                        </div>

                        <?Php endwhile; ?>
                        
                        
                    </div>
                </div>
            </div>
    </section>-->
    <!--=== Pricing end ===-->


    <!--=== Portfolio start ===-->
    <section id="portfolio">
        <div class="col-12 text-center bg-dark pt-7 pb-5">
            <h1 class="text-light text-center"><?php echo get_field('portfolio_title'); ?>PORTFOLIO <span class="text-secondary">GALLERY</span></h1>
            <hr class="hr-lg w-10 hr-dark text-center">
        </div>
        <div class="row pt-5 pb-6 d-flex justify-content-center">
            <div class="row col-10 col-lg-9 col-xl-9 pb-5">
                <div class="text-dark text-center text-medium"><?php echo get_field('portfolio_subtitle'); ?></div>
            </div>
            <?php while(has_sub_field('portfolios')): ?>
            <div class="col-12 col-md-8 col-lg-4 col-xl-4 portfolio-item pb-5">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-search-plus fa-lg"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php echo get_sub_field('image'); ?>" alt="">
                </a>
                <div class="portfolio-caption bg-dark box-shadow">
                    <h6 class="pt-2 pb-1 text-light"><?php echo get_sub_field('title'); ?></h6>
                </div>
            </div>
             <?Php endwhile; ?>
            
            
        </div>
    </section>
    <!--=== Portfolio end ===-->


    <!--=== Support start ===-->
    <section id="support">
        <div class="col-12 text-center bg-dark pt-7 pb-5">
            <h1 class="text-light text-center"><?php echo get_field('team_title'); ?></h1>
            <hr class="hr-lg w-10 hr-dark text-center">
        </div>
        <div class="row d-flex justify-content-center pt-5 pb-9">
            <div class="col-10 col-md-8 col-lg-6 col-xl-5 pt-5 pb-5">
                <div class="pl-3 pr-3">
                    <div id="accordion" role="tablist" aria-multiselectable="true" data-aos="fade-right">
                        <?php $count=1; while(has_sub_field('support_team')): ?>
                        <div class="card">
                            <div class="card-header bg-dark" role="tab" id="heading<?php echo $count; ?>">
                                <h6 class="pl-4"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>" style="text-decoration:none"><?php echo get_sub_field('title'); ?>
                                 </a>
                                </h6>
                            </div>
                            <div id="collapse<?php echo $count; ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $count; ?>">
                                <h6 class="card-block col-md-12 col-lg-12 m-4 pr-5"><?php echo get_sub_field('content'); ?>
                                </h6>
                            </div>
                        </div>
                        <?Php $count++; endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="col-8 col-xl-6 pt-5" data-aos="fade-left">
                <div class="row d-flex justify-content-center pt-2 pb-2">
                    <div class="col-3 pt-2 text-right">
                        <i class="fa fa-address-book-o fa-2x icon-color pt-4"></i>
                    </div>
                    <div class="col-9 text-left pt-4">
                        <h6 class="text-dark text-left bold2">ADDRESS</h6>
                        <h6 class="text-muted text-left"><?php echo get_field('address'); ?></h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-center pt-2 pb-2">
                    <div class="col-3 pt-2 text-right">
                        <i class="fa fa-phone fa-2x icon-color pt-4"></i>
                    </div>
                    <div class="col-9 text-left pt-4">
                        <h6 class="text-dark text-left bold2">PHONE</h6>
                        <h6 class="text-muted text-left"><?php echo get_field('phone'); ?></h6>
                    </div>
                </div>
                <div class="row d-flex justify-content-center pt-2 pb-2">
                    <div class="col-3 pt-2 text-right">
                        <i class="fa fa-envelope-o fa-2x icon-color pt-4"></i>
                    </div>
                    <div class="col-9 text-left pt-4">
                        <h6 class="text-dark text-left bold2">E-MAIL</h6>
                        <h6 class="text-muted text-left"><?php echo get_field('email'); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Support end ===-->


    <!--===  Contact end ===-->
    <section id="contact">
        <div class="col-12 bg-dark pt-7 pb-5">
            <h1 class="text-light text-center">CONTACT<span class="text-secondary"> FORM</span></h1>
            <hr class="hr-lg w-10 hr-dark text-center">
        </div>
        <div class="container col-10 col-md-6 col-xl-10 pt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-sm-10 col-md-12 col-lg-12">
                    <?php echo do_shortcode(get_field('contact_form')); ?>
                </div>
            </div>
            <!--===  Opening Hours start ===-->
            <div class="container d-flex justify-content-center pt-1 pb-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex justify-content-center pt-1 pb-1" data-aos="fade-up">
                        <h6 class="text-light text-center"><i class="col-12 fa fa-clock-o fa-2x icon-color p-3"></i> Monday to Friday - <span class="info-text"><?php echo get_field('timings'); ?></span></h6>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex justify-content-center pt-1 pb-1" data-aos="fade-up">
                        <h6 class="text-light text-center"><i class="col-12 fa fa-phone fa-2x icon-color p-3"></i> 24/7 Support - <span class="info-text"><?php echo get_field('support_number'); ?></span></h6>
                    </div>
                </div>
            </div>
            <!--===  Opening Hours end ===-->
      
    </section>
    <!--===  Contact end ===-->


<?php get_footer(); ?>