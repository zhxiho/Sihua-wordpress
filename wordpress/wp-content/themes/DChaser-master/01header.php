<?php
            wp_nav_menu( array(
                'theme_location'  =>'header-nav' , //菜单名称
                'menu'      => 'header-nav',//导航菜单的名称,ID/别名/名字。
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
<!-- header start -->
<div class="wrapper header-b">
    <div class="mid-wrapper">
        <a class="header-logo" href="<?php bloginfo('url'); ?>">
            <img class="logo" src="<?php bloginfo('template_url'); ?>/static/img/icon/logo.png" alt="站点logo" />
        </a>
        <div class="language">
            <a href="">English</a>
        </div>
        <div class="nav">
            <ul class="nav-ul">
                <?php 
                    echo " <li dl='1' class='nav-ul-li ";
                    if(is_home()){echo " shouye'>";}else{echo " '> ";} 
                ?>
                    <a href="http://localhost/wordpress/wordpress/" class="index" style="text-align:center;">首页</a>
                </li>
                <?php 
                    echo " <li dl='2' class='nav-ul-li ";
                    if(is_single()){echo " shouye'>";}else{echo " '> ";} 
                ?>
                    <a href="" class="index">
                        产品中心
                        <div class="down-list"><span></span></div>
                    </a>
                    <div class="menu-list">
                        <div class="items">
                            <p class="item-title">互动媒体</p>
                            <a href="" class="item-info">互动媒体01</a>
                            <a href="" class="item-info">互动媒体02</a>
                            <a href="" class="item-info">互动媒体03</a>
                        </div>
                        <div class="items">
                            <p class="item-title">虚拟化</p>
                            <a href="" class="item-info">虚拟化01</a>
                            <a href="" class="item-info">虚拟化02</a>
                            <a href="" class="item-info">虚拟化03</a>
                        </div>
                        <div class="items">
                            <p class="item-title">云基础设施</p>
                            <a href="" class="item-info">云基础设施01</a>
                            <a href="" class="item-info">云基础设施02</a>
                            <a href="" class="item-info">云基础设施03</a>
                            <a href="" class="item-info">云基础设施04</a>
                        </div>
                        <div class="items">
                            <p class="item-title">大数据</p>
                            <a href="" class="item-info">大数据01</a>
                            <a href="" class="item-info">大数据02</a>
                            <a href="" class="item-info">大数据03</a>
                        </div>
                    </div>
                </li>
                <?php 
                    echo " <li dl='3' class='nav-ul-li ";
                    if(is_page("partner")){echo " shouye'>";}else{echo " '> ";} 
                ?>
                    <a href="http://localhost/wordpress/wordpress/partner/" class="index">合作伙伴
                        <div class="down-list"><span></span></div>
                    </a>
                </li>
                <?php 
                    echo " <li dl='4' class='nav-ul-li ";
                    if(is_page("servicesupport")){echo " shouye'>";}else{echo " '> ";} 
                ?>
                    <a href="http://localhost/wordpress/wordpress/servicesupport/" class="index">服务支持
                        <div class="down-list"><span></span></div>
                    </a>
                </li>
                <?php 
                    echo " <li dl='5' class='nav-ul-li ";
                    if(is_page("about")){echo " shouye'>";}else{echo " '> ";} 
                ?>
                    <a href="http://localhost/wordpress/wordpress/about/" class="index">关于我们
                        <div class="down-list"><span></span></div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="more">
        <div id="nav-more" class="nav-more">
            <img class="more-pic" src="<?php bloginfo('template_url'); ?>/static/img/icon/menu.png" alt="导航栏"/>
            <div class="more-menu">
                <div class="more-menu-nav">
                    <ul class="more-list">
                        <li id="shouye" class="more-li">
                            <a href="" class="index">首页</a>
                        </li>
                        <li class="more-li">
                            <div dl="1" class="index menu-l">
                                产品中心
                                <div class="more-down"><span></span></div>
                            </div>
                            <ul id="list1" class="more-li-list">
                                <li class="more-item">
                                    <p class="more-item-title">
                                        互动媒体
                                        <a href="" class="more-item-info">互动媒体01</a>
                                        <a href="" class="more-item-info">互动媒体02</a>
                                        <a href="" class="more-item-info">互动媒体03</a>
                                    </p>
                                </li>
                                <li class="more-item">
                                    <p class="more-item-title">
                                        虚拟化

                                    </p>
                                </li>
                                <li class="more-item">
                                    <p class="more-item-title">
                                        云基础设施

                                    </p>
                                </li>
                                <li class="more-item">
                                    <p class="more-item-title">
                                        大数据

                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-li">
                            <div dl="2" class="index menu-l">合作伙伴
                                <div class="more-down"><span></span></div>
                            </div>
                            <ul id="list2" class="more-li-list">
                                <li class="more-item">
                                    <p class="more-item-title">
                                        合作伙伴1

                                    </p>
                                </li>
                                <li class="more-item">
                                    <p class="more-item-title">
                                        合作伙伴2

                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-li">
                            <div dl="3" class="index menu-l">服务支持
                                <div class="more-down"><span></span></div>
                            </div>
                            <ul id="list3" class="more-li-list">
                                <li class="more-item">
                                    <p class="more-item-title">合作伙伴1</p>
                                </li>
                                <li class="more-item">
                                    <p class="more-item-title">合作伙伴2</p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-li">
                            <div dl="4" class="index menu-l">关于我们
                                <div class="more-down"><span></span></div>
                            </div>
                            <ul id="list4" class="more-li-list">
                                <li class="more-item">
                                    <p class="more-item-title">合作伙伴1</p>
                                </li>
                                <li class="more-item">
                                    <p class="more-item-title">合作伙伴2</p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-li">
                            <a href="" class="index">English
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- header end --> 