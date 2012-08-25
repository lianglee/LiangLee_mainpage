<?php
/* LiangLee Main Page
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLee Main page
 * @author Liang Lee
 * @copyright Copyrigh (c) 2012, Liang Lee
 * @File custom_index.php 
 */
echo ("<div id='LiangLee_mainpage_wcr'>\n");
echo ("\n");
if (!elgg_get_plugin_setting('liang_lee_hp', 'LiangLee_mainpage')) {
LiangLee_view('LiangleeFramework', 'forms/login');
}
if (elgg_get_plugin_setting('liang_lee_hp', 'LiangLee_mainpage') == 'lbox') {
LiangLee_view('LiangleeFramework', 'forms/login');
 }
if (elgg_get_plugin_setting('liang_lee_hp', 'LiangLee_mainpage') == 'rbox') {
LiangLee_view('LiangleeFramework', 'forms/reg');
}

echo ("</span></div>");
echo ("<div id='LiangLee_mainpage_wcl'>");
echo ("<h1>");
LiangLee_img('LiangLee_mainpage','lianglee_main_m.jpg');
echo "</h1>";
?>
<!-- Main Page Author Liang Lee !-->