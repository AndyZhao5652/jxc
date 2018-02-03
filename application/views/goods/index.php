<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>
<body>
<div class="wrapper">
	<div class="mod-search cf">
	    <div class="fl">
	      <ul class="ul-inline">
	        <li>
	          <input type="text" id="matchCon" class="ui-input ui-input-ph matchCon" value="按商品编号，商品名称，规格型号等查询">
	        </li>
	        <li><a class="ui-btn mrb" id="search"><?php echo showlang('common', 'common_query');?></a></li>
	      </ul>
	    </div>
	    <div class="fr"><a href="#" class="ui-btn ui-btn-sp mrb" id="btn-add"><?php echo showlang('common', 'common_add');?></a>
		<!--<a href="#" class="ui-btn mrb" id="btn-print">打印</a>
		<a href="#" class="ui-btn mrb" id="btn-import">导入</a>-->
		<a href="#" class="ui-btn mrb" id="btn-export"><?php echo showlang('common', 'common_export');?></a>
		<a href="#" class="ui-btn" id="btn-batchDel"><?php echo showlang('common', 'common_query');?></a></div>
	  </div>
	  <div class="cf">
	    <div class="grid-wrap fl cf">
	    	<h3>当前分类：<span id='currentCategory'></span><a href="javascript:void(0);" id='hideTree'>&gt;&gt;</a></h3>
		    <table id="grid">
		    </table>
		    <div id="page"></div>
		</div>
		<div class="fl cf" id='tree'>
			<h3>快速查询</h3>
			<div class="quickSearchField dn">
				<form class="ui-search" id="searchCategory">
					<input type="text" class="ui-input" /><button type="submit" title="点击搜索" >搜索</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="<?=skin_url()?>/js/dist/goodsList.js?35"></script>
</body>
</html>