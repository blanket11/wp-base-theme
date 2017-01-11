<?php
/**
 * post取得設定
 *
 * @param $query
 */
function custom_pre_get_posts($query) {

    if( is_admin() || ! $query->is_main_query() ){
        return;
    }

//    if ( $query->is_arcive() ) {
//        $query->set( 'posts_per_page', '5' );
//        return;
//    }

}
//add_action( 'pre_get_posts', 'custom_pre_get_posts' );
?>