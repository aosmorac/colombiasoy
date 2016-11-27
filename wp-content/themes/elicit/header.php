<?php
/**
 * @package elicit
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
  </head>


	<body <?php body_class(); ?> >
	
				<div class="Header" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php endif; ?>);">

				<div class = "container">

	<?php if ( is_active_sidebar( 'header_right' ) ) : ?>
	
	<div class="headright" role="complementary">
					<span class = "container">

		<?php dynamic_sidebar( 'header_right' ); ?>
		</span>
	</div><!-- #Right-Header -->
	<?php endif; ?>

					<div class="logo" >
						<?php if ( get_theme_mod( 'logo' ) ) : ?>
						
							
						        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
						        	<img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>'>
						        </a>
						        					
						<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'name' ) ) : ?>
												
								<h2 class="name">
									<a class="url" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
								</h2>
								
								<?php if ( get_bloginfo( 'description' ) ) { ?>
								
									<h4 class="tagline"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h4>
									
								<?php } ?>
								
							<?php endif; ?>
						
						
					</div><!-- /site-logo -->
</div>
</div>

<?php if ( has_nav_menu('header-menu') ): ?>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'elicit' ); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
	  			<div class = "container">


                        <?php
                               
                                $headermenu = array(
                                        'theme_location' => 'header-menu',
                                        'depth'          => 2,
                                        'container'      => false,
                                        'menu_class'     => 'nav navbar-nav',
                                        'walker'         => new Bootstrap_Walker_Nav_Menu()
                                );
 
                                wp_nav_menu($headermenu);
                       
                        ?>

                           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<?php endif; ?>

      
		</div>		

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->

      </nav>
	  
		<div  class = "container">