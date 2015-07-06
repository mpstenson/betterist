<!DOCTYPE html>
<html>
<?php get_header(); ?>



    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/uikit.min.css" />
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/uikit.min.js"></script>
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/components/parallax.min.js"></script>
        <script src="<?php echo get_bloginfo('template_url'); ?>/js/components/sticky.min.js"></script>
    </head>
    <body>
      <!---<div class="uk-width-medium-1-2 " style="background-color:#fff; padding-bottom:4px; z-index:1000" data-uk-sticky >
<ul class="uk-subnav uk-subnav-line" style="margin-top:6px; margin-left:30px;">
    <li>Home</li>
    <li>Contact</li>
    <li>About</li>
    <li>Store</li>
</ul>
</div>-->
<div class="uk-width-medium-1-2 " style="background-color:#fff; padding-bottom:4px; z-index:1000" data-uk-sticky >
<?php

$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'span',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="uk-subnav uk-subnav-line %2$s header-menu">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
</div>
        <div class="uk-grid">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div class="uk-width-1-1 header-container" style="background-image: url('<?php echo $image[0]; ?>')" data-uk-parallax="{bg: '-400'}">

<?php endif; ?>


              <div class="uk-grid">
                <div class="uk-width-1-10"></div>
                <div class="uk-width-8-10">
                  <h1 data-uk-parallax="{opacity:0, viewport: 1, y:0}" class="uk-align-center"><a title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <h2 data-uk-parallax="{opacity:0, viewport: 1.5, y:100}"><?php echo the_excerpt(); ?> </h2>
                  <!--<div class="uk-width-2-10 uk-align-center">Read More</div>-->
                  <a href="#post-<?php the_ID(); ?>" data-uk-parallax="{opacity:0, viewport: 1, y:200}" class="uk-icon-angle-double-down uk-align-center" style="font-size:40px; text-align:center; color:#000" data-uk-smooth-scroll="{offset: 50}"></a>
                  <div class="uk-width-1-10"></div></div></div></div>
            <div class="uk-width-2-10"></div><div class="uk-width-6-10">
              <article id="post-<?php the_ID(); ?>">
                <div>


                	<div class="entry-content">
                		<?php
                			the_content(__('Continued&hellip;'));
                			wp_link_pages();

                		?>
                	</div>

                	<?php the_tags(); ?>

                	<?php the_category(); ?>

                	<address class="vcard author">
                		<span class="n"><?php the_author(); ?></span>
                	</address>

                	<abbr class="published" title="<?php the_time('Y-m-dTH:i'); ?>"><?php the_date(); ?> @ <?php the_time(); ?></abbr>

                	<a href="<?php trackback_url(); ?>"><?php _e('Trackback URL'); ?></a>

                	<?php comments_popup_link(); ?>

                	<?php edit_post_link(); ?>
                </div>
            </div>
            </article>
            <?php endwhile; ?>
            <!-- post navigation -->
          <?php else: ?>
            <!-- no posts found -->
          <?php endif; ?>
        </div>
        <div class="uk-width-2-10"></div>
        </div>
        <?php get_footer(); ?>
    </body>
</html>
