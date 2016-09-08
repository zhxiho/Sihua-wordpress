     <!-- Header -->
    <div id="header" class="wrapper">
        <div class="minwrapper header-h" style="background-color:green;">
            <a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php bloginfo('template_url'); ?>/static/img/logo.png" alt="站点logo" /></a>
            <?php
             wp_nav_menu( array(
                'theme_location'  =>'primary' ,
                'container' => 'nav',
                'container_id' => 'main-nav-menu',
                'items_wrap' => '<ul class=sf-menu >%3$s</ul>',
                'fallback_cb'  => '',
                'depth'       =>  3,
                'walker'      =>  new GK_Nav_Walker
             ) );
             ?>
        </div>
    </div>
    
    <div id="project-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>最新图文</h4>
                <p>这里汇集了我们网站最新的图文页面，你可以点击查阅详细！</p>
                <p><a href="javascript:void(0)">查看更多</a></p>
                <div class="carousel-nav">
                    <a id="project-prev" class="jcarousel-prev" href="javascript:void(0)" title="上一页"></a>
                    <a id="project-next" class="jcarousel-next" href="javascript:void(0)" title="下一页"></a>
                </div>
            </div>

            <ul class="project-carousel">
                <?php
                global $query_string;
                query_posts($query_string.'&showposts=100&caller_get_posts=1');
                $i = 0;
                if (have_posts()){
                    while (have_posts()){
                        the_post();
                        $content = $post->post_content;
                        $searchimages = '~<img [^>]* />~';
                        preg_match_all( $searchimages, $content, $pics );
                        $iNumberOfPics = count($pics[0]);
                        if ( $iNumberOfPics > 0 &&$i <6) {
                          echo "<li><a href='";
                          echo the_permalink();
                          echo "' title='' class='project-item'><img src='";
                          echo catch_that_image();
                          echo "' alt='";
                          echo the_title();
                          echo "'/><div class='overlay'><h5>";
                          echo strip_tags(the_excerpt());
                          echo "</h5><p>";
                          echo the_title();
                          echo "</p></div> </a></li>\n";
                          $i ++;
                        }
                    }
                }
                ?>
            </ul>
            <div class="has-line" style="margin-top: 50px;"></div>
        </div>
        <!-- /Project Carousel -->

        <!-- Blog Carousel -->
        <div id="blog-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>热评文章</h4>
                <p>最受欢迎的文章当然有它的出彩之处，点进去看看吧！</p>
                <p><a href="javascript:void(0)">查看更多</a></p>
                <div class="carousel-nav">
                    <a id="blog-prev" class="jcarousel-prev" href="javascript:void(0)" title="上一页"></a>
                    <a id="blog-next" class="jcarousel-next" href="javascript:void(0)" title="下一页"></a>
                </div>
            </div>

            <ul class="blog-carousel">
            <?=simple_get_most_viewed(); ?>
            </ul>
        </div>
        <!-- /Blog Carousel -->

    </div>
    <!-- /Content -->
<?php
get_footer();
?>

////////////////////////////////////////////////////////////////////


<div class="wrapper" style="background-color:blue;">
    <div class="minwrapper header-h">
        <a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php bloginfo('template_url'); ?>/static/img/logo.png" alt="站点logo" /></a>
        <nav class="nav" style="background-color:pink;">
            <ul>
                <li>
                    <a href="">首页</a>
                    <div class=""></div>
                </li>
                <li>
                    <a href="">产品中心</a>
                    <div class="menu-list" style="background-color:red;">
                        vsdfvs
                    </div>
                </li>
                <li>
                    <a href="">合作伙伴</a>
                    <div class="menu-list" style="background-color:pink;">
                        vsdfv
                    </div>
                </li>
                <li>
                    <a href="">专业服务支持</a>
                    <div class="menu-list" style="background-color:yellow;">
                        fvsf
                    </div>
                </li>
                <li>
                    <a href="">关于我们</a>
                    <div class="menu-list" style="background-color:green;">
                        vsdfvbsd
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>


////////////////////////////////////////////////////////////////////
<div class="wrapper">
    <div class="banner" style="height:200px;">
        <?php echo do_shortcode("[metaslider id=86]"); ?>
    </div>
</div>

<div class="wrapper" >
    <div class="minwrapper padding" style="background-color:yellow;">
        <div class="Title" style="background-color:red;">
            <h2>产品中心</h2>
            <h3>Product Center</h3>
        </div>
        <div class="product-list">
            <div class="product" style="background-color:green;">
                <div class="product-pic"></div>
                <h3 class="product-name"></h3>
                <p class="product-info"></p>
            </div>
            <div class="product" style="background-color:pink;">
                <div class="product-pic"></div>
                <h3 class="product-name"></h3>
                <p class="product-info"></p>
            </div>
            <div class="product" style="background-color:green;">
                <div class="product-pic"></div>
                <h3 class="product-name"></h3>
                <p class="product-info"></p>
            </div>
            <div class="product" style="background-color:blue;">
                <div class="product-pic"></div>
                <h3 class="product-name"></h3>
                <p class="product-info"></p>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" style="background-color:#F7F7F7;">
    <div class="minwrapper padding" style="background-color:pink;">
        <div class="Title" style="background-color:red;">
            <h2>行业解决方案</h2>
            <h3>Industry solutions</h3>
        </div>
        <div class="project-list">
            <div class="project" style="background-color:green;">1</div>
            <div class="project" style="background-color:pink;">2</div>
            <div class="project" style="background-color:green;">3</div>
        </div>
        <div class="project-list">
            <div class="project" style="background-color:pink;">4</div>
            <div class="project" style="background-color:green;">5</div>
            <div class="project" style="background-color:pink;">6</div>
        </div>
    </div>
</div>

<div class="wrapper" >
    <div class="minwrapper padding" style="background-color:yellow;">
        <div class="Title" style="background-color:red;">
            <h2>思华动态</h2>
            <h3>Sihua dynamics</h3>
        </div>
        <div class="news-list">
            <div class="news" style="background-color:green;">1</div>
            <div class="news" style="background-color:pink;">2</div>
        </div>
    </div>
</div>

<div class="wrapper" style="background-color:#F7F7F7;">
    <div class="minwrapper padding" style="background-color:yellow;">
        <div class="Title" style="background-color:red;">
            <h2>合作伙伴</h2>
            <h3>Partner</h3>
        </div>
        <div class="partner-list">
            <div class="partner" style="background-color:green;">1</div>
            <div class="partner" style="background-color:pink;">2</div>
            <div class="partner" style="background-color:green;">3</div>
            <div class="partner" style="background-color:blue;">4</div>
        </div>
        <div class="partner-list">
            <div class="partner" style="background-color:green;">5</div>
            <div class="partner" style="background-color:pink;">6</div>
            <div class="partner" style="background-color:green;">7</div>
            <div class="partner" style="background-color:blue;">8</div>
        </div>
        <div class="partner-list">
            <div class="partner" style="background-color:green;">9</div>
            <div class="partner" style="background-color:pink;">10</div>
            <div class="partner" style="background-color:green;">11</div>
            <div class="partner" style="background-color:blue;">12</div>
        </div>
    </div>
</div>

<div class="wrapper" style="background-color:#292929;">
    <div class="minwrapper padding" style="background-color:yellow;">
        <div class="footer-list">
            <div class="footer" style="background-color:green;">1</div>
            <div class="footer" style="background-color:pink;">2</div>
            <div class="footer" style="background-color:green;">3</div>
            <div class="footer" style="background-color:blue;">4</div>
            <div class="footer" style="background-color:green;">5</div>
            <div class="footer" style="background-color:blue;">6</div>
        </div>
    </div>
    <div class="Title" style="background-color:red;margin-top:-5px;padding:10px;">
        <h4>版权信息代码</h4>
    </div>
</div>