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
                    $productCount = get_category(9)->count;
                    query_posts('cat=9');
                    $i = 0;
                    $index = 0;
                    if (have_posts()){
                        while (have_posts()){
                            the_post();
                            $content = $post->post_content;
                            $searchimages = '~<img [^>]* />~';
                            preg_match_all( $searchimages, $content, $pics );
                            $iNumberOfPics = count($pics[0]);
                            if ( $iNumberOfPics > 0 ) {
                              echo "<div class='product";
                              if( $productCount%3 == 0 || $productCount == 5 ){
                                echo "3";
                              }else if( $productCount == 4 ){
                                echo "4";
                              }
                              echo "' id='product";
                              echo $index++;
                              echo "'><img src=' ";
                              echo catch_that_image();
                              echo "' alt=' ";
                              echo the_title();
                              echo "' class='product-pic' /><a class='product-name' href='";
                              echo the_permalink();
                              echo "'>";
                              echo the_title();
                              echo "</a><p class='product-info'>";
                              echo get_the_excerpt();
                              echo "</p></div>";
                              $i ++;
                            }
                        }
                    }


                    <div class="items">
                            <a href="" class="item-title">互动媒体</a>
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





                        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>   
      <!-- 轮播（Carousel）项目 -->
      <div class="carousel-inner">
          <div class="item active">
              <img src="<?php bloginfo('template_url');?>/static/img/img/banner1.png">
          </div>
          <div class="item">
              <img src="<?php bloginfo('template_url');?>/static/img/img/banner2.png">
          </div>
          <div class="item">
              <img src="<?php bloginfo('template_url');?>/static/img/img/banner1.png">
          </div>
      </div>
      <!-- 轮播（Carousel）导航 -->
      <a class="carousel-control left" href="#myCarousel" 
          data-slide="prev">
          <img class="banner-prev" src="<?php bloginfo('template_url'); ?>/static/img/icon/left.png" alt="上一张图片" />
      </a>
      <a class="carousel-control right" href="#myCarousel" 
          data-slide="next">
          <img class="banner-next" src="<?php bloginfo('template_url'); ?>/static/img/icon/right.png" alt="下一张图片" />
      </a>
    <img class="carousel-control bottom" src="<?php bloginfo('template_url'); ?>/static/img/icon/down.png" alt="往下看" />
      <!-- 控制按钮 -->
      <div style="text-align:center;display:none;">
          <input type="button" class="btn start-slide" value="Start">
          <!-- <input type="button" class="btn pause-slide" value="Pause">
          <input type="button" class="btn prev-slide" value="Previous Slide">
          <input type="button" class="btn next-slide" value="Next Slide">
          <input type="button" class="btn slide-one" value="Slide 1">
          <input type="button" class="btn slide-two" value="Slide 2">            
          <input type="button" class="btn slide-three" value="Slide 3"> -->
      </div>