<?php
/** searchform.php
 *
 * The template for displaying search forms
 *
 * @author      Konstantin Obenland
 * @package     The Bootstrap
 * @since       1.0.0 - 07.02.2012
 */
?>
<form method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <h3><?php _e( '搜索searchform', 'gkwp' ); ?></h3>
    <?php
		        	$args = array(
					    'child_of' => 16,  //获取指定ID下的所有子级目录
					    'show_count'=> 1  //显示文章合计数
					);
					wp_list_categories( $args );
					/* wp_list_categories是按已有的格式输出结果
					wp_list_categories( $args );
					要实现按自己的想法输出，可以用get_categories获取结果后重构，如下
					*/
					// $result = get_categories( $args );
					// if ( count( $result ) ){
					//     echo "<ul>";
					//     foreach( $result as $key => $category ){
					//         echo '<li>$category->cat_name<span>$category->count</span></li>';
					//     }
					//     echo "</ul>";
					// }
	        		
	            ?>
    <div class="input-append">
        <input  id="s" class="search" value="Search" default-value="Search" type="text" name="s" placeholder="<?php esc_attr_e( 'Search', 'gkwp' ); ?>" />
        <input class="red search-btn" name="submit" id="searchsubmit" type="submit" value="<?php _e( 'Go', 'gkwp' ); ?>"/>
    </div>
</form>
<?php


/* End of file searchform.php */
/* Location: ./wp-content/themes/the-bootstrap/searchform.php */