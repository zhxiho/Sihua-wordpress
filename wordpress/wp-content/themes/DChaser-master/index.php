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
	<div class="content-wrapper" style="background-color:yellow;">
		<div class="mid-wrapper" style="background-color:pink;">
	        <div class="Title" style="background-color:;">
	            <p>产品中心</p>
	        </div>
	        <div class="product-list" style="background-color:red;">
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
            <div class="product" style="background-color:blue;">
                <img src="<?php bloginfo('template_url'); ?>/static/img/img/cloudbase.png"  alt=""  class="product-pic" />
                <p class="product-name">云基础设施</p>
                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
            </div>
            <div class="product" style="background-color:green;">
                <img src="<?php bloginfo('template_url'); ?>/static/img/img/bigdata.png"  alt=""  class="product-pic" />
                <p class="product-name">大数据</p>
                <p class="product-info">完整的端到端互动媒体专家，完整的端到端互动媒体专家</p>
            </div>
	        </div>
	    </div>
	</div>
	<!-- product end -->
	<!-- project start -->
	<div class="content-wrapper" style="background-color:pink;">
		<div class="mid-wrapper" style="background-color:pink;">
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
	<!-- project end -->
	<!-- pantner start -->
	<div class="content-wrapper" style="background-color:green;">
		pantner
	</div>
	<!-- pantner end -->
<!-- content end --> 

<?php
get_footer();
?>



        