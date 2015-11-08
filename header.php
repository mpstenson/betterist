<head>
    <title><?php wp_title(''); ?>
<?php if(wp_title('', false)) { echo ' - '; } ?>
<?php bloginfo('name'); ?></title>
    <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
    <meta content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?><?php bloginfo('name'); ?>" property="og:title" />
    <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>


<!-- if page is content page -->
<?php if (is_single()) { ?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

<!-- if page is others -->
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="logo.jpg" /> <?php } ?>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-20
        }, 1000);
        return false;
      }
    }
  });
  $('#mobile-menu-hamburger').click(function(){$('.mobile-menu').toggle()})
});
</script>
</head>


<body <?php body_class( $class ); ?>>
  <div style="position:fixed; width:100%; background-color:#fff; ">
<div class="bet-grid" style="height:50px;">
<div class="bet-col-5-10 bet-responsive-show" id="site-title"><img src="<?php echo get_template_directory_uri()  ?>/images/LogoWide.png" style="height:50px; float:left;"></div>
<div class="bet-col-5-10" style="padding-bottom:4px; z-index:1000" >
<i class="fa fa-bars bet-responsive-show" id="mobile-menu-hamburger"></i>
<?php

$defaults = array(
'theme_location'  => '',
'menu'            => '',
'container'       => 'nav',
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
'items_wrap'      => '<ul>%3$s</ul>',
'depth'           => 0,
'walker'          => ''
);

wp_nav_menu( $defaults );

?>
</div>

<?php

$mobile_defaults = array(
'theme_location'  => '',
'menu'            => '',
'container'       => 'div',
'container_class' => 'mobile-menu-container',
'container_id'    => '',
'menu_class'      => 'mobile-menu',
'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
'before'          => '',
'after'           => '',
'link_before'     => '',
'link_after'      => '',
'items_wrap'      => '<ul class=mobile-menu>%3$s</ul>',
'depth'           => 1,
'walker'          => ''
);

wp_nav_menu( $mobile_defaults );

?>

<div class="bet-col-5-10 bet-responsive-hide" id="site-title"><img src="<?php echo get_template_directory_uri();  ?>/images/LogoWide.png" style="height:50px; float:right;"></div>
</div>
</div>
