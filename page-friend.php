<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 友情链接独立页面模板
 * @Date: 2020-04-29 20:06:36
 * @Author: Bapi
 * @package custom
 * @FilePath: /diaspora/page-friend.php
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
<link rel="shortcut icon" href="/usr/themes/Diaspora-Typecho-master/assets/images/ico.png"type="image/x-icon" />
<head>
    
<div id="single" class="page">
    <div id="top">
        <a class="image-icon" href="javascript:history.back()"></a>
    </div>

    <div class="section" style="left: 0;">
	    <div class="article">
                <div>
			    <ul class="friend">
        		    <?php $this->content(); ?>
				</ul>
                </div>

                <div class="comment-wrap">
                    <?php $this->need('component/comments.php'); ?>                    
                </div>
            </div>
        </div>
    </div>
</div></html>