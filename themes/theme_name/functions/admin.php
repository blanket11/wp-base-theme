<?php
/**
 * 管理画面メニューの項目削除
 *
 *   @author  yuki sato
 *   @create  2016/06/17
 *   @version    1.0
 */


/**
 * 管理画面サイドメニュー各項目非表示設定
 */
function remove_menus () {
//    remove_menu_page('index.php'); // ダッシュボード
//    remove_menu_page('edit.php'); // 投稿
//    remove_menu_page('upload.php'); // メディア
//    remove_menu_page('edit.php?post_type=page'); // 固定ページ
//    remove_menu_page('edit-comments.php'); // コメント
//    remove_menu_page('themes.php'); // 外観
//    remove_menu_page('plugins.php'); // プラグイン
//    remove_menu_page('users.php'); // ユーザー
//    remove_menu_page('tools.php'); // ツール
//    remove_menu_page('options-general.php'); // 設定
}
//add_action('admin_menu', 'remove_menus');

/**
 * 管理画面サイドサブメニュー各項目非表示設定
 */
function hide_menus() {
//    remove_submenu_page('index.php', 'index.php'); // ダッシュボード -> ホーム
//    remove_submenu_page('index.php', 'update-core.php'); // ダッシュボード > 更新
//    remove_submenu_page('edit.php', 'edit.php'); // 投稿 > 投稿一覧
//    remove_submenu_page('edit.php', 'post-new.php'); // 投稿 > 新規追加
//    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category'); // 投稿 > カテゴリ
//    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); // 投稿 > タグ
//    remove_submenu_page('upload.php', 'upload.php'); // メディア > ライブラリ
//    remove_submenu_page('upload.php', 'media-new.php'); // メディア > 新規追加
//    remove_submenu_page('link-manager.php', 'link-manager.php'); // リンク > すべてのリンク
//    remove_submenu_page('link-manager.php', 'link-add.php'); // リンク > 新規追加
//    remove_submenu_page('link-manager.php', 'edit-tags.php?taxonomy=link_category'); // リンク > リンクカテゴリー
//    remove_submenu_page('edit.php?post_type=page', 'edit.php?post_type=page'); // 固定ページ > 固定ページ一覧
//    remove_submenu_page('edit.php?post_type=page', 'post-new.php?post_type=page'); // 固定ページ > 新規追加
//    remove_submenu_page('themes.php', 'themes.php'); // 外観 > テーマ
//    remove_submenu_page('themes.php', 'widgets.php'); // 外観 > ウィジェット
//    remove_submenu_page('themes.php', 'theme-editor.php'); // 外観 > テーマ編集
//    remove_submenu_page('plugins.php', 'plugins.php'); // プラグイン > インストール済みプラグイン
//    remove_submenu_page('plugins.php', 'plugin-install.php'); // プラグイン > 新規追加
//    remove_submenu_page('plugins.php', 'plugin-editor.php'); // プラグイン > プラグイン編集
//    remove_submenu_page('users.php', 'users.php'); // ユーザー > ユーザー一覧
//    remove_submenu_page('users.php', 'user-new.php'); // ユーザー > 新規追加
//    remove_submenu_page('users.php', 'profile.php'); // ユーザー > プロフィール
//    remove_submenu_page('tools.php', 'tools.php'); // ツール > 利用可能なツール
//    remove_submenu_page('tools.php', 'import.php'); // ツール > インポート
//    remove_submenu_page('tools.php', 'export.php'); // ツール > エクスポート
//    remove_submenu_page('options-general.php', 'options-general.php'); // 設定 > 一般
//    remove_submenu_page('options-general.php', 'options-writing.php'); // 設定 > 投稿設定
//    remove_submenu_page('options-general.php', 'options-reading.php'); // 設定 > 表示設定
//    remove_submenu_page('options-general.php', 'options-discussion.php'); // 設定 > ディスカッション
//    remove_submenu_page('options-general.php', 'options-media.php'); // 設定 > メディア
//    remove_submenu_page('options-general.php', 'options-privacy.php'); // 設定 > プライバシー
//    remove_submenu_page('options-general.php', 'options-permalink.php'); // 設定 > パーマリンク設定
}
//add_action('admin_menu', 'hide_menus');


/**
 * バージョンアップ通知を非表示
 */
function update_nag_hide() {
remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_init', 'update_nag_hide');


/**
 * 管理画面のWordPressのロゴを消す
 */
function hide_admin_bar_menu($wp_admin_bar) {
    $wp_admin_bar->remove_node('wp-logo'); // WordPressロゴ
    $wp_admin_bar->remove_menu( 'updates' ); // 更新アイコン
    $wp_admin_bar->remove_node('comments'); // コメントアイコン
//    $wp_admin_bar->remove_node('new-content'); // 新規投稿ボタン
//    $wp_admin_bar->remove_node('edit-profile'); // プロフィール編集
//    $wp_admin_bar->remove_node('user-info'); // ユーザー
}
add_action( 'admin_bar_menu', 'hide_admin_bar_menu', 99 );


/**
 * 管理画面左下『WordPress のご利用ありがとうございます。』を削除
 */
function hide_admin_footer() {}
add_filter('admin_footer_text','hide_admin_footer');