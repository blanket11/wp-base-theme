<?php
/**
 * 定数記述
 *
 * 定数名は単語毎「_」区切りで全て大文字にする
 *
 *   @author  yuki sato
 *   @create  2016/06/17
 *   @version    1.0
 */

define('TOP_POST_LIMIT', 10 );
define('HOME_URL', home_url('/') );
define('ITEM_URL', get_stylesheet_directory_uri(). '/');
define('CSS_DIR', ITEM_URL. 'css/');
define('JS_DIR', ITEM_URL. 'js/');
define('IMG_DIR', ITEM_URL. 'images/');
define('NO_IMAGE', ITEM_URL. 'images/no-image/list.png');
define('NO_IMAGE_L', ITEM_URL. 'images/no-image/detail.png');
hahahhaha
/**
 * functions/を見込み
 */
foreach(glob(dirname(__FILE__)."/functions/*.php") as $file){
	require_once $file;
}
?>
