<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="ie-comp"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="x-ua-Compatible" content="IE=7,IE=9"/>
    <meta http-equiv="x-ua-compatible" content="IE=7,9"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1;"/> 
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0"/>
    <?php include('lib/seo.php'); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/bootstrap.css" /> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/bootstrap-theme.css" /> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/bootstrap-theme.min.css" /> -->
    <?php
    //加载css
    gk_load_css();
    wp_head();
    //加载js
    gk_load_js();
    if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
    ?>
    <script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider();
	});
    </script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/js.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/jsjs.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/bootstrap.js"></script>
    <script>
    $(function(){
        // 初始化轮播,从左到右循环轮播项目
        $("#myCarousel").carousel('cycle');
    });
</script>
    
</head>
<body >
<!-- main start -->
<body class="wrapper">
    
