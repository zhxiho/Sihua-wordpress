<?php
get_header('meta');
get_header();
?>
<!-- content start -->
	<!-- banner start -->
	<div class="wrapper content-height">
	    <div class="banner-list">
	        <div id="banner1" class="banner-pic1" style="background-image:url(<?php bloginfo('template_url'); ?>/static/img/img/banner1.png);">
	        </div>
	        <div id="banner2" class="banner-pic2" style="background-image:url(<?php bloginfo('template_url'); ?>/static/img/img/banner2.png);"/>
	        </div>
	    </div>
	    <div class="banner-prev-next">
	    	<div class="banner-roll">
	    		<div id="prev" dl="1" class="prev">
	    			<img class="banner-prev" src="<?php bloginfo('template_url'); ?>/static/img/icon/left.png" alt="上一张图片" />
	    		</div>
	    		<div id="next" dl="2" class="prev">
	    			<img class="banner-next" src="<?php bloginfo('template_url'); ?>/static/img/icon/right.png" alt="下一张图片" />
	    		</div>
	    	</div>
	    	<a id="down" class="banner-bottom" href="javascript:void(0);">
    			<img src="<?php bloginfo('template_url'); ?>/static/img/icon/down.png" alt="往下看" />
    		</a>
	    </div>
	    <div class="banner-btn">
	    	<a id="li1" href="javascript:void(0);" class="banner-btn-line line1"></a>
	    	<a id="li2" href="javascript:void(0);" class="banner-btn-line"></a>
	    </div>
	</div>
	<!-- banner end -->
	<!-- product start -->
	<div class="content-wrapper">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>产品中心</p>
	        </div>
	        <div class="product-list">
	        	<div id="first" class="product pro">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/media.png" alt="" class="product-pic" />
	                <p class="product-name">互动媒体</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div id="second" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/invented.png"  alt=""  class="product-pic" />
	                <p class="product-name">虚拟化</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div id="third" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/cloudbase.png"  alt=""  class="product-pic" />
	                <p class="product-name">云基础设施</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div id="last" class="product">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/bigdata.png"  alt=""  class="product-pic" />
	                <p class="product-name">大数据</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- product end -->
	<!-- project start -->
	<div class="content-wrapper" style="background-color:#f6f6f6;">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>行业解决方案</p>
	        </div>
	        <div class="project-list">
	            <!-- 获取新闻动态文章 -->
	            <?php
	                global $query_string;
	                query_posts($query_string.'&showposts=8&caller_get_posts=6');
	                $i = 0;
	                $index = 0;
	                if (have_posts()){
	                    while (have_posts()){
	                        the_post();
	                        $content = $post->post_content;
	                        $searchimages = '~<img [^>]* />~';
	                        preg_match_all( $searchimages, $content, $pics );
	                        $iNumberOfPics = count($pics[0]);
	                        if ( $iNumberOfPics > 0 &&$i <6) {
	                          echo "<a id='project";
	                          echo $index++;
	                          echo "' href=' ";
	                          echo the_permalink();
	                          echo "' class='project'><img src=' ";
	                          echo catch_that_image();
	                          echo "' alt='";
	                          echo the_title();
	                          echo "' class='project-pic' /><div class='project-info'>";
	                          echo "<p>";
	                          echo the_title();
	                          echo "</p><div class='project-icon' ";
	                          echo " ><div class='icon'></div>
	                          <div class='icon'></div>
	                          <div class='icon'></div>
	                          </div></div></a>";
	                          $i ++;
	                        }
	                    }
	                }
	            ?>
	        </div>
		</div>
	</div>
	<!-- project end -->
	<!--news start -->
	<div class="content-wrapper">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>思华动态</p>
	        </div>
	        <div class="news-list">
	        	<div id="news1" class="news">
	                <div class="news-left">
	                    <p class="news-kind">
	                        新闻动态
	                        <a href="" class="news-more">更多&gt;</a>
	                    </p>
	                </div>
	                <div class="news-first">
	                    <?=simple_get_most_viewed(); ?>
	                </div>
	                    <?=simple_get_most_viewed1(); ?>
	            </div>
	            <div id="news2" class="news news02">
	                <div class="news-left">
	                    <p class="news-kind">
	                        媒体报导
	                        <a href="" class="news-more">更多&gt;</a>
	                    </p>
	                </div>
	                <div class="news-first">
	                    <?=simple_get_most_viewed(); ?>
	                </div>
	                    <?=simple_get_most_viewed1(); ?>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- news end -->
	<!-- pantner start -->
	<div class="content-wrapper" style="background-color:#f6f6f6;">
		<div class="content-mid-wrapper Title-position">
	        <div class="Title">
	            <p>合作伙伴</p>
	        </div>
	        <div class="partner-list">
	        	<div class="partner-page01">
	                <div class="partner-top">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	                <div class="partner-bottom">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                </div>
	            </div>
	            <div class="partner-page02">
	                <div class="partner-top">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" />
	                </div>
	                <div class="partner-bottom">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	            </div>
	            <div class="partner-page03">
	                <div class="partner-top">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	                <div class="partner-bottom">
	                	<img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" />
	                </div>
	            </div>
	        </div>
	        <div class="partner-next-button">
	            <a dl="1" href="javascript:void(0);" class="partner-point point"></a>
	            <a dl="2" href="javascript:void(0);" class="partner-point"></a>
	            <a dl="3" href="javascript:void(0);" class="partner-point"></a>
	        </div>
	    </div>
	</div>
	<!-- pantner end -->
<!-- content end --> 

<?php
get_footer();
?>



        