<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
#matchCon { width: 280px; }
</style>
</head>

<body class="bgwh">
<div class="container fix p20">
	  <div class="mod-search m0 cf">
	    <div class="fl">
	      <ul class="ul-inline">
	        <li>
	          <input type="text" id="matchCon" class="ui-input ui-input-ph" value="输入编号 / 名称 / 联系人 / 电话查询">
	        </li>
	        <li><a class="ui-btn mrb" id="search"><?php echo showlang('common', 'common_query');?></a><!-- <a class="ui-btn" id="refresh">刷新</a> --></li>
	      </ul>
	    </div>
	  </div>
	  <div class="grid-wrap" style="width: 735px; ">
	    <table id="grid">
	    </table>
	    <div id="page"></div>
	  </div>
</div>
<script src="<?=skin_url()?>/js/dist/select_vendor.js"></script>
</body>
</html>


