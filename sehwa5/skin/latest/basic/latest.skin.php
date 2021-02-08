<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="notice01 clearfix">
    <!-- 제목 -->
    <div class="left">
      <h2 class="notice_title"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
      <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>
    </div>
    <ul class = "right">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li class="notice_li">

          <!-- 게시판제목 -->
          <a href="<?echo $list[$i]['href']?>">
            <h3><?echo $list[$i]['subject']?></h3>
            <p><?php echo $list[$i]['name'] ?>
            <?php echo $list[$i]['datetime2'] ?></p>
          </a>
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>


</div>