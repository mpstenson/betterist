<!DOCTYPE html>
<html>
<?php get_header(); ?>
        <div class="uk-grid" id="content-container">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div class="uk-width-1-1 header-container" style="background-image: url('<?php echo $image[0]; ?>')" data-uk-parallax="{bg: '-400'}">

<?php endif; ?>


              <div class="uk-grid">
                <div class="uk-width-1-10"></div>
                <div class="uk-width-8-10">
                  <h1 data-uk-parallax="{opacity:0, viewport: -.5, y:0}" class="uk-align-center"><a title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <h2 data-uk-parallax="{opacity:0, viewport: -.5, y:100}"><?php echo the_excerpt(); ?> </h2>
                  <!--<div class="uk-width-2-10 uk-align-center">Read More</div>-->
                  <a href="#post-<?php the_ID(); ?>" data-uk-parallax="{opacity:0, viewport: -.5, y:200}" class="uk-icon-angle-double-down uk-align-center" style="font-size:40px; text-align:center; color:#000" data-uk-smooth-scroll="{offset: 0}"></a>
                  <div class="uk-width-1-10"></div></div></div></div>
            <div class="uk-width-medium-2-10"></div><div class="uk-width-medium-6-10">
              <article id="post-<?php the_ID(); ?>">



                		<?php
                			the_content(__('Continued&hellip;'));
                			wp_link_pages();

                		?>


                	<?php the_tags(); ?>

                	<?php the_category(); ?>

                	<address class="vcard author">
                		<span class="n"><?php the_author(); ?></span>
                	</address>

                	<abbr class="published" title="<?php the_time('Y-m-dTH:i'); ?>"><?php the_date(); ?> @ <?php the_time(); ?></abbr>

                	<a href="<?php trackback_url(); ?>"><?php _e('Trackback URL'); ?></a>

                	<?php comments_popup_link(); ?>

                	<?php edit_post_link(); ?>


            </article>
            </div>
            <div class="uk-width-medium-2-10"></div>
            <?php endwhile; ?>
            <!-- post navigation -->
          <?php else: ?>
            <!-- no posts found -->
          <?php endif; ?>

        </div>
        <?php get_footer(); ?>
    </body>
</html>
