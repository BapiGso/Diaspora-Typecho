<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/*
 * @Author: Jin
 * @Date: 2020-03-11 12:19:13
 * @LastEditors: Jin
 * @LastEditTime: 2020-03-13 09:03:16
 * @FilePath: /Diaspora/page.php
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="<?php $this->options->charset(); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="google" content="notranslate" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), ''); ?></title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/Diaspora.css'); ?>">
	<?php $this->header(); ?>
<head>
    
<div id="single" class="page">
    <div id="top">
        <a class="image-icon" href="javascript:history.back()"></a><a href="<?php $this->options->siteUrl(); ?>">
    </div>

    <div class="section" style="left: 0;">
	    <div class="article">
            <div>
                <div class="content">
        		    <?php $this->content(); ?>
                </div>
                
                <div class="comment-wrap">
                    <?php $this->need('component/comments.php'); ?>                    
                </div>
            </div>
        </div>
    </div>
</div></html>
