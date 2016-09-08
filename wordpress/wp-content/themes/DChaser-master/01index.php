<?php
get_header('meta');
get_header();
?>
<div class="wrapper banner-p">
    <div class="banner" style="height:;">
        <?php echo do_shortcode("[metaslider id=86]"); ?>
    </div>
</div>

<div class="wrapper" >
    <div class="minwrapper padding" style="background-color:;">
        <div class="Title" style="background-color:;">
            <p>产品中心</p>
        </div>
        <div class="product-list flex" style="background-color:yellow;">
            <div class="product" style="background-color:red;">
                <img src="<?php bloginfo('template_url'); ?>/static/img/img/media.png" alt="" class="product-pic" />
                <p class="product-name">互动媒体</p>
                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
            </div>
            <div class="product" style="background-color:pink;">
                <img src="<?php bloginfo('template_url'); ?>/static/img/img/invented.png"  alt=""  class="product-pic" />
                <p class="product-name">虚拟化</p>
                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
            </div>
            <div class="product" style="background-color:;">
                <img src="<?php bloginfo('template_url'); ?>/static/img/img/cloudbase.png"  alt=""  class="product-pic" />
                <p class="product-name">云基础设施</p>
                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
            </div>
            <div class="product" style="background-color:;">
                <img src="<?php bloginfo('template_url'); ?>/static/img/img/bigdata.png"  alt=""  class="product-pic" />
                <p class="product-name">大数据</p>
                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" style="background-color:#F7F7F7;">
    <div class="minwrapper padding" style="background-color:;">
        <div class="Title" style="background-color:;">
            <p>行业解决方案</p>
        </div>
        <div class="project-list flex">
            <!-- 获取新闻动态文章 -->
            <?php
                global $query_string;
                query_posts($query_string.'&showposts=5&caller_get_posts=1');
                $i = 0;
                if (have_posts()){
                    while (have_posts()){
                        the_post();
                        $content = $post->post_content;
                        $searchimages = '~<img [^>]* />~';
                        preg_match_all( $searchimages, $content, $pics );
                        $iNumberOfPics = count($pics[0]);
                        if ( $iNumberOfPics > 0 &&$i <6) {
                          echo "<a href=' ";
                          echo the_permalink();
                          echo "' class='project'><img src=' ";
                          echo catch_that_image();
                          echo "' alt='";
                          echo the_title();
                          echo "' class='project-pic' /><div class='project-info'>";
                          echo "<p>";
                          echo the_title();
                          echo "</p></div></a>";
                          $i ++;
                        }
                    }
                }
            ?>
        </div>
        <div class="project-list flex">
            <?php
                global $query_string;
                query_posts($query_string.'&showposts=5&caller_get_posts=1');
                $i = 0;
                if (have_posts()){
                    while (have_posts()){
                        the_post();
                        $content = $post->post_content;
                        $searchimages = '~<img [^>]* />~';
                        preg_match_all( $searchimages, $content, $pics );
                        $iNumberOfPics = count($pics[0]);
                        if ( $iNumberOfPics > 0 &&$i <6) {
                          echo "<a href='";
                          echo the_permalink();
                          echo "'  class='project' ><img src=' ";
                          echo catch_that_image();
                          echo "' alt='";
                          echo the_title();
                          echo "' class='project-pic' /><div class='project-info'>";
                          echo "<p>";
                          echo the_title();
                          echo "</p></div></a>";
                          $i ++;
                        }
                    }
                }
            ?>
        </div>
    </div>
</div>

<div class="wrapper" >
    <div class="minwrapper padding" style="background-color:;">
        <div class="Title" style="background-color:;">
            <p>思华动态</p>
        </div>
        <div class="news-list flex">
            <div class="news" style="background-color:;">
                <div class="news-left" style="background-color:;">
                    <p class="news-kind" style="background-color:;">
                        新闻动态
                        <a href="" class="news-more" style="background-color:;">更多&gt;</a>
                    </p>
                    
                </div>
                <div class="news-first" style="background-color:;">
                    <?=simple_get_most_viewed(); ?>
                </div>
                    <?=simple_get_most_viewed1(); ?>
            </div>
            <div class="news" style="background-color:;">
                <div class="news-left" style="background-color:;">
                    <p class="news-kind" style="background-color:;">
                        媒体报导
                        <a href="" class="news-more" style="background-color:;">更多&gt;</a>
                    </p>
                    
                </div>
                <div class="news-first" style="background-color:;">
                    <?=simple_get_most_viewed(); ?>
                </div>
                    <?=simple_get_most_viewed1(); ?>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" style="background-color:#F7F7F7;">
    <div class="minwrapper padding" style="background-color:;">
        <div class="Title" style="background-color:;">
            <p>合作伙伴</p>
        </div>
        <div class="partner-page">
            <div class="partner-page01">
                <div class="partner-list flex">
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner01.png" alt="" style="background-color:green;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner02.png" alt="" style="background-color:pink;" />  
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner03.png" alt="" style="background-color:green;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner04.png" alt="" style="background-color:blue;" />
                </div>
                <div class="partner-list flex">
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner01.png" alt="" style="background-color:green;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner02.png" alt="" style="background-color:pink;" />  
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner03.png" alt="" style="background-color:green;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner04.png" alt="" />
                </div>
            </div>
            <div class="partner-page02">
                <div class="partner-list flex">
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner04.png" alt="" style="background-color:blue;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner01.png" alt="" style="background-color:green;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner02.png" alt="" style="background-color:pink;" /> 
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner03.png" alt="" style="background-color:green;" />
                </div>
                <div class="partner-list flex">
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner04.png" alt="" style="background-color:blue;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner01.png" alt="" style="background-color:green;" />
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner02.png" alt="" style="background-color:pink;" /> 
                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/partner03.png" alt="" style="background-color:green;" />
                </div>
            </div>
        </div>
        <div class="partner-next-button" style="background-color:;">
            <a class="partner-prev"></a>
            <a class="partner-next"></a>
        </div>
    </div>
</div>
<?php
get_footer();
?>



        