<?php
	get_header('meta');
	get_header(); 
?>
<div class="pj-wrapper" style="background-color:red;">
    <img src="<?php bloginfo('template_url');?>/static/img/img/banner1.png">
    <h1>产品中心</h1>
</div>
<?php 
	wp_nav_menu( array(
        'theme_location'  =>'product' , //菜单名称
        'menu'      => '9',//导航菜单的名称,ID/别名/名字。
        'container' => 'div',//容器类型，只支持 div 和 nav 标签
        'container_class' => 'menu-nav-container',//ul父节点的 class 属性
        'container_id' => '',//ul父节点的 id 属性
        'menu_class'   => 'nav-ul',//ul 节点的 class 属性
        'menu_id'     => '',//ul节点的 id 属性
        'echo'      => true,//导航菜单的 Html 代码还是直接打印输出,True（直接打印输出）
        'items_wrap' => '<ul class=nav-ul >%3$s</ul>',//替换 ul 的 class 属性
        'fallback_cb'  => 'wp_page_menu',//回调函数
        'before'     => '',//显示在每个菜单链接前的文本
        'after'      => '',//显示在每个菜单链接后的文本
        'link_before'   => '',//显示在每个菜单链接文本前的文本
        'link_after'   => '',//显示在每个菜单链接文本后的文本
        'depth'       =>  1,//显示菜单的深度，当数值为 0 时显示所有深度的菜单。
        'walker'      =>  new GK_Nav_Walker//菜单的结构对象
    ) );
?>


<?php get_footer(); ?> 