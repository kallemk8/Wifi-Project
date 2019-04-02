    <!--===  Footer start ===-->
    <footer class="bg-solitude">
        <div class="col-lg-12 text-center pt-4">
            <h6 class="text-dark font-weight-bold"><?php if(get_field('logo','options')=='Text'): ?>
                <div class="text-secondary text-secondary p-3 h5"><?php echo get_field('logo_text','options'); ?></div>
                <?php endif; ?>
                <?php if(get_field('logo','options')=='Image'): ?>
                <img src="<?php echo get_field('logo_image','options'); ?>">
                <?php endif; ?></h6>
            <hr class="w-5 hr-dark text-center">
            <div class="text-small pt-2 pb-2">COPYRIGHT © 2017 | ALL RIGHTS RESERVED</div>
            <!-- SOCIAL ICONS -->
            <div class="mr-5 ml-5 pt-2 pb-2">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-12 icon-color">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--===  Footer End ===-->


    <!--=== Page Content end ===-->
    
    <!--=== JavaScript ===-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/popper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!--=== Preloader  ===-->
    <script>
    $(window).load(function() {
        $('#before-load').find('i').fadeOut('').end().delay(400).fadeOut('slow');
    });
    </script>
    <!--=== Contact form ===-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/contact_me.js"></script>
    <!--=== Custom ===-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/agency.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/aos.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/aos-script.js"></script>

</body>
<!--=== Body end ===-->

</html>