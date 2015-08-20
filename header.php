<head>
    <title></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
</head>


<body>
  <div style="position:fixed; width:100%; background-color:#fff; ">
<div class="bet-grid" style="height:50px;">

<div class="bet-col-5-10" style="padding-bottom:4px; z-index:1000" >
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
<div class="bet-col-5-10" id="site-title"><img src="<?php echo get_bloginfo('template_url'); ?>/images/LogoWide.png" style="height:50px; float:right;"></div>
</div>
</div>
