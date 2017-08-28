<!DOCTYPE html>
  <html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php wp_title(); ?></title>
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
 
        <header>
        <!-- Site Navigation -->
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/lime-circle.png" class="">
                    <span class="logo-text"><span class="light-green-text">THE</span><span class="green-text">LIME</span><span class="light-green-text">NETWORK</span></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Students</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Pathways</a></li>
                        <li><a href="#">Students</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Subscribe</a></li>
                    </ul>
                </div>
            </nav>
        </header>