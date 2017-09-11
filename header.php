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
                    <a href="/" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/lime-circle.png" class="">
                    <span class="logo-text"><span class="light-green-text">THE</span><span class="green-text">LIME</span><span class="light-green-text">NETWORK</span></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <!-- Main Menu -->
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'Main Menu',
                            'theme_location' => 'main_menu',
                            'menu_class' =>'right hide-on-med-and-down',
                            'walker' => new wp_materialize_navwalker()
                            )
                        );
                    ?>
                    <!-- Mobile Menu -->
<!--                     <?php
                        wp_nav_menu( array(
                            'theme_location' => 'mobile_menu',
                            'container' => 'ul',
                            'menu_id' => 'mobile-demo',
                            'menu_class' =>'side-nav',
                            'walker' => new wp_materialize_navwalker()
                            )
                        );
                    ?> -->
                </div>
            </nav>
        </header>