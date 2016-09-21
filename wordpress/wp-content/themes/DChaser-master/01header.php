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