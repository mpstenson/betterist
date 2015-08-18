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
<div class="uk-grid" style="height:50px">

<div class="uk-width-1-2" style="background-color:#fff; padding-bottom:4px; z-index:1000" >
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
<div class="uk-width-1-2" id="site-title"><img src="<?php echo get_bloginfo('template_url'); ?>/images/LogoWide.png" style="height:50px; float:right;"></div>
</div>
