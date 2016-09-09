<?php
get_header('meta');
get_header();
?>
<!-- content start -->
	<!-- banner start -->
	<div class="wrapper content-height" style="background-color:;">
	    <div class="banner-list" style="background-color:;">
	        <div id="pic1" class="banner-pic" style="background-image:url(<?php bloginfo('template_url'); ?>/static/img/img/banner1.png);">
	        </div>
	        <div id="pic2" class="banner-pic" style="background-image:url(<?php bloginfo('template_url'); ?>/static/img/img/banner2.png);"/>
	        </div>
	        <div id="pic3" class="banner-pic" style="background-image:url(<?php bloginfo('template_url'); ?>/static/img/img/banner1.png);"/>
	        </div>
	        <div id="pic4" class="banner-pic" style="background-image:url(<?php bloginfo('template_url'); ?>/static/img/img/banner2.png);"/>
	        </div>
	    </div>
	    <div class="banner-prev-next" style="background-color:;">
	    	<div class="banner-roll" style="background-color:;">
	    		<div id="prev">
	    			<img class="banner-prev" src="<?php bloginfo('template_url'); ?>/static/img/icon/left.png" alt="上一张图片"  style="background-color:;"/>
	    		</div>
	    		<div id="next">
	    			<img class="banner-next" src="<?php bloginfo('template_url'); ?>/static/img/icon/right.png" alt="下一张图片"  style="background-color:;"/>
	    		</div>
	    	</div>
	    	<a class="banner-bottom" href="javascript:void(0);">
    			<img src="<?php bloginfo('template_url'); ?>/static/img/icon/down.png" alt="往下看"  style="background-color:;"/>
    		</a>
	    </div>
	    <div class="banner-btn" style="background-color:;">
	    	<div class="banner-btn-line"></div>
	    	<div class="banner-btn-line"></div>
	    	<div class="banner-btn-line"></div>
	    	<div class="banner-btn-line"></div>
	    </div>
	</div>
	<!-- banner end -->
	<!-- product start -->
	<div class="content-wrapper" style="background-color:;">
		<div class="content-mid-wrapper Title-position" style="background-color:;">
	        <div class="Title" style="background-color:;">
	            <p>产品中心</p>
	        </div>
	        <div class="product-list" style="background-color:;">
	        	<div class="product first" style="background-color:;">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/media.png" alt="" class="product-pic" />
	                <p class="product-name">互动媒体</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div class="product second" style="background-color:;">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/invented.png"  alt=""  class="product-pic" />
	                <p class="product-name">虚拟化</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div class="product third" style="background-color:;">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/cloudbase.png"  alt=""  class="product-pic" />
	                <p class="product-name">云基础设施</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	            <div class="product last" style="background-color:;">
	                <img src="<?php bloginfo('template_url'); ?>/static/img/img/bigdata.png"  alt=""  class="product-pic" />
	                <p class="product-name">大数据</p>
	                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- product end -->
	<!-- project start -->
	<div class="content-wrapper" style="background-color:#f7f7f7;">
		<div class="content-mid-wrapper Title-position" style="background-color:;">
	        <div class="Title" style="background-color:;">
	            <p>行业解决方案</p>
	        </div>
	        <div class="project-list" style="background-color:;">
	            <!-- 获取新闻动态文章 -->
	            <?php
	                global $query_string;
	                query_posts($query_string.'&showposts=8&caller_get_posts=6');
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
	<div class="content-wrapper" style="background-color:;">
		<div class="content-mid-wrapper Title-position" style="background-color:;">
	        <div class="Title" style="background-color:;">
	            <p>思华动态</p>
	        </div>
	        <div class="news-list" style="background-color:;">
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
	            <div class="news news02" style="background-color:;">
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
	<!-- news end -->
	<!-- pantner start -->
	<div class="content-wrapper" style="background-color:#f6f6f6;">
		<div class="content-mid-wrapper Title-position" style="background-color:;">
	        <div class="Title" style="background-color:;">
	            <p>合作伙伴</p>
	        </div>
	        <div class="partner-list" style="background-color:;">
	        	<div class="partner-page01" style="background-color:;">
	                <div class="partner-top" style="background-color:;">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" style="background-color:;" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/2.png" alt="" style="background-color:;" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/3.png" alt="" style="background-color:;" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" style="background-color:;" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/1.png" alt="" style="background-color:;" />
	                </div>
	                <div class="partner-bottom">
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/5.png" alt="" style="background-color:;" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/6.png" alt="" style="background-color:;" />  
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/7.png" alt="" style="background-color:;" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/8.png" alt="" />
	                    <img class="partner" src="<?php bloginfo('template_url'); ?>/static/img/img/4.png" alt="" style="background-color:;" />
	                </div>
	            </div>
	        </div>
	        <div class="partner-next-button" style="background-color:;">
	            <a class="partner-point"></a>
	            <a class="partner-point"></a>
	            <a class="partner-point"></a>
	        </div>
	    </div>
	</div>
	<!-- pantner end -->
<!-- content end --> 

<?php
get_footer();
?>



        