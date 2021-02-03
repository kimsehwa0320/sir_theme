<?php
include_once('./_common.php'); //문서 포함해서 적용하게 해줌
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$co_id = "testpage";
$menuNum = "1"; //메뉴  순서 몇번째 쓸지
$menuNum = "2"; //서브메뉴 순서 몇번째 쓸지
$g5['title'] = "오시는 길"; //메소드 구문과 동일

include_once(G5_THEME_PATH.'/head.php');?>
<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1612328493700" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1612328493700",
		"key" : "249o4",
		"mapWidth" : "930",
		"mapHeight" : "500"
	}).render();
</script>
<div class="">
  서울 구로구 구로동 602-5

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
