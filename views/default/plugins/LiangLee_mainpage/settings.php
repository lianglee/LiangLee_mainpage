<?php
/* LiangLee Main Page
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework( LEFW )
 * @subpackage LiangLee Main page
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File settings.php
 */
$LiangLee_version =LiangLee_version('LiangleeFramework');
$LiangLee_release =LiangLee_release('LiangleeFramework');

$liang_lee_mainpage_copytights = elgg_echo('llee:pname:leecopy');
$title = elgg_echo('llee:pname:settings');
$lleesettings = elgg_echo('llee:pname:settings');
$liang_lee_hp_label = elgg_echo('llee:pname:h1');
$liang_lee_hp = elgg_view('input/dropdown', array(
    'name' => 'params[liang_lee_hp]',
    'value' => $vars['entity']->liang_lee_hp,
    'options_values' => array('lbox' => 'LoginBox', 'rbox' => 'RegisterationBox')
        ));

$settings = <<<__HTML

    <h3>$lleesettings</h3>
    <div>
        <p><i>$liang_lee_hp_label</i><br>$liang_lee_hp</p>
		<hr>
		<p><i>$liang_lee_mainpage_copytights</i>
		<p>Release:$LiangLee_release</p>
		<p>Version:$LiangLee_version</p>
    </div>
    
</div>
__HTML;
echo $settings, $title;
