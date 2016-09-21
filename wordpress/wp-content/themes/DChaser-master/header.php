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
                        <?php
                            $result = get_categories("child_of=9&depth=0&hide_empty=0");
                            $productCount = count($result);
                            $index = '';
                            foreach( $result as $key => $category ){
                              echo "<div class='items";
                              // if( $productCount%3 == 0 || $productCount == 5 ){
                              //   echo "3";
                              // }else if( $productCount == 4 ){
                              //   echo "4";
                              // }
                              echo "'><a class='item-title' href='";
                              echo bloginfo('url');
                              echo "/".$category->slug."'>".$category->name;
                              echo "</a>";
                              //echo "<a class='item-info' href='";
                              //echo ;//产品链接
                              //echo "'></a>";
                              echo "</div>";
                            }
                        ?>
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