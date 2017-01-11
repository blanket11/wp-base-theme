<?php
/**
 * 共通部分設定
 * 
 *   @author  yuki sato
 *   @create  2016/06/17
 *   @version    1.0
 */

/**
 * バージョン非表示
 */
remove_action('wp_head','wp_generator');


/**
 * EditURLの非表示
 */
remove_action('wp_head', 'rsd_link');


/**
 * wlwmanifestの非表示
 */
remove_action('wp_head', 'wlwmanifest_link');


/**
 * デフォルトパーマリンクの削除
 */
remove_action('wp_head', 'wp_shortlink_wp_head');


/**
 * Feedのリンク出力をさせない
 */
remove_action('wp_head', 'feed_links', 2);


/**
 * その他のFeedのリンク出力をさせない
 */
remove_action('wp_head', 'feed_links_extra', 3);


/**
 * RSSなどでの バージョン非表示
 */
remove_action('rss2_head', 'the_generator');
remove_action('rss_head', 'the_generator');
remove_action('rdf_header', 'the_generator');
remove_action('atom_head', 'the_generator');
