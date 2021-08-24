<?php
/*
 * @FilePath: /Typecho-Theme-Template/custom/configs.php
 * @author: Wibus
 * @Date: 2021-08-24 12:14:57
 * @LastEditors: Wibus
 * @LastEditTime: 2021-08-24 15:39:38
 * Coding With IU
 */

function themeConfig($form) {
    // 下面的来自default主题：https://github.com/typecho/typecho/blob/master/usr/themes/default/functions.php
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());

}