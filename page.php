<?php get_header(); ?>
        <div class="bet-grid" id="content-container">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div class="bet-col-1-1 header-container page-header" style="background-image:linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0)),  url('<?php echo $image[0]; ?>')">

<?php endif; ?>


              <div class="bet-grid">
                <div class="bet-col-1-10"></div>
                <div class="bet-col-8-10">
                  <h1 class="uk-align-center"><a title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <div class="bet-col-1-10"></div></div></div></div>
            <div class="bet-col-2-10 bet-responsive-hide"></div><div class="bet-col-6-10 bet-responsive-stretch">
              <article id="post-<?php the_ID(); ?>">



                		<?php
                		        //echo reading_length();
                			the_content(__('Continued&hellip;'));
                			wp_link_pages();

                		?>


                	<?php the_tags(); ?>

                	Categories: <?php the_category(); ?>

                	<address class="vcard author">
                		<span class="n"><?php the_author(); ?></span>
                	</address>

                	<abbr class="published" title="<?php the_time('Y-m-dTH:i'); ?>"><?php the_date(); ?> @ <?php the_time(); ?></abbr>

                	<a href="<?php trackback_url(); ?>"><?php _e('Trackback URL'); ?></a>

                	<?php comments_template(); ?>
                	<?php edit_post_link(); ?>


            </article>
            </div>
            <div class="bet-col-2-10 bet-responsive-hide"></div>
            <?php endwhile; ?>
            <!-- post navigation -->
          <?php else: ?>
            <!-- no posts found -->
          <?php endif; ?>

        </div>
        <?php get_footer(); ?>
    </body>
</html>
