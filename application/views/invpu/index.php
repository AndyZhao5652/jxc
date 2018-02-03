<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>

<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
#matchCon { width: 280px; }
#print{margin-left:10px;}
a.ui-btn{margin-left:10px;}
#reAudit,#audit{display:none;}
</style>
</head>

<body>
<div class="wrapper">
  <div class="mod-search cf">
    <div class="fl">
      <ul class="ul-inline">
        <li>
          <input type="text" id="matchCon" class="ui-input ui-input-ph" value="请输入单据号或供应商或备注">
        </li>
        <li>
          <label>日期:</label>
          <input type="text" id="beginDate" value="" class="ui-input ui-datepicker-input">
          <i>-</i>
          <input type="text" id="endDate" value="" class="ui-input ui-datepicker-input">
        </li>
        <li><a class="ui-btn" id="search"><?php echo showlang('common', 'common_query');?></a><!--<a class="ui-btn ui-btn-refresh" id="refresh" title="刷新"><b></b></a>--></li>
      </ul>
    </div>
    <div class="fr"><a class="ui-btn ui-btn-sp" id="add"><?php echo showlang('common', 'common_add');?></a>
	<!--<a class="ui-btn" id="print" target="_blank" href="javascript:void(0);">打印</a>-->
	<a class="ui-btn" id="export" target="_blank" href="javascript:void(0);"><?php echo showlang('common', 'common_export');?></a><a class="ui-btn dn" id="audit">审核</a><a class="ui-btn" id="reAudit">反审核</a></div>
  </div>
<!--  <div class="mod-toolbar-top cf">
    <div class="fl"><strong class="tit">仓库</strong></div>
    <div class="fr"><a class="ui-btn ui-btn-sp mrb" id="search"><?php echo showlang('common', 'common_add');?></a><a class="ui-btn" id="export"><?php echo showlang('common', 'common_export');?></a></div>
  </div>-->
  <div class="grid-wrap">
    <table id="grid">
    </table>
    <div id="page"></div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/purchaseList.js?91"></script>
</body>
</html>