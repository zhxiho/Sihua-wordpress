 <?php
 get_header('meta');
 get_header(); 
 ?>
<div class="wrapper">
    <img style="width:100%;height:100%;" src="<?php bloginfo('template_url');?>/static/img/img/banner1.png">
</div>
<div class="heading-top">
当前位置 single-media：<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a> > <?php $categories = get_the_category(); echo(get_category_parents($categories[0]->term_id, TRUE, ' > '));  ?>正文
</div>

<?php get_footer(); ?> 