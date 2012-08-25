<?php
/* LiangLee Main Page
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Main page
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File start.php 
 */
?>
<?php

elgg_register_event_handler('init', 'system', 'LiangLee_mainpage_init');

function LiangLee_mainpage_init() {
if (!elgg_is_active_plugin('LiangleeFramework')) {
 if (elgg_is_admin_logged_in()) {
 register_error(elgg_echo('lianglee:framewrok:miss'));
 } else {
 register_error(elgg_echo('lianglee:framewrok:miss:code'));	
     }
    }  
}
?>