<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>

<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
.matchCon{width:280px;}
</style>
</head>
<body>
<div class="wrapper">
	<div class="mod-search cf">
	    <div class="fl">
	      <ul class="ul-inline">
	        <li>
	          <input type="text" id="matchCon" class="ui-input ui-input-ph matchCon" value="输入运输单编号/ 名称/ 联系人/ 电话查询">
	        </li>
	        <li><a class="ui-btn mrb" id="search"><?php echo showlang('common', 'common_query');?></a></li>
	      </ul>
	    </div>
	    <div class="fr"><a href="#" class="ui-btn ui-btn-sp mrb" id="btn-add"><?php echo showlang('common', 'common_add');?></a><!--<a href="#" class="ui-btn mrb" id="btn-print">打印</a>-->
		<!--<a href="#" class="ui-btn mrb" id="btn-import">导入</a>-->
		<a href="#" class="ui-btn mrb" id="btn-export"><?php echo showlang('common', 'common_export');?></a>
		<a href="#" class="ui-btn" id="btn-batchDel"><?php echo showlang('common', 'common_delete');?></a></div>
	  </div>
    <div class="grid-wrap">
	    <table id="grid">
	    </table>
	    <div id="page"></div>
	  </div>
</div>
<script src="<?=skin_url()?>/js/dist/transList.js?ver=20140819"></script>
</body>
</html>




