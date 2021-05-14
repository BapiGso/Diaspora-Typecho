<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 时间线独立页面模板
 * @Date: 2020-04-29 20:06:36
 * @Author: Bapi
 * @package custom
 * @FilePath: /diaspora/page-timeline.php
 */
?>
<?php $this->need('component/header.php'); ?>

<div id="single" class="page">
    <div id="top">
        <a class="image-icon" href="javascript:history.back()"></a>
    </div>
    
    <div class="section" style="left: 0;">
	    <div class="article">
            <div>
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    $output = '<div class="content">';
    while($archives->next()):
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
        $y=$year; $m=$mon;
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<h2><strong>'. $year .' 年 <strong></h2><ul>'; //输出年份
        }
        if ($mon != $mon_tmp) {
            $mon = $mon_tmp;
            $output .= '<li><span>'. $mon .' 月</span><ul>'; //输出月份
        }
        $output .= '<li>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> </li>'; //输出文章日期和标题
    endwhile;
    $output .= '</ul></li></ul></div>';
    echo $output;
?>
        		    <?php $this->content(); ?>
                </div>
                
                <div class="comment-wrap">
                    <?php $this->need('component/comments.php'); ?>                    
                </div>
            </div>
        </div>
    </div>
</div></html>
