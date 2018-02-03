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
    <div class="s-inner cf">
      <div class="fl"> <strong class="tit mrb fl">查询条件</strong>
        <div class="ui-btn-menu fl" id="filter-menu"> <span class="ui-btn menu-btn"> <span id="selected-date">请选择查询条件</span><b></b> </span>
          <div class="con">
            <ul class="filter-list">
              <li>
                <label class="tit">日期:</label>
                <input type="text" value="2014-08-29" class="ui-input ui-datepicker-input" readonly name="beginDate" id="beginDate" />
                <span>至</span>
                <input type="text" value="2014-09-04" class="ui-input ui-datepicker-input" readonly name="endDate" id="endDate" />
              </li>
            </ul>
            <ul class="filter-list" id="more-conditions">
              <li>
                  <label  class="tit" for="filter-user">用户：</label>
                  <span class="ui-combo-wrap" id="user">
                    <input type="text" name="filter-user" id="filter-user" class="input-txt" autocomplete="off" />
                    <span class="trigger"></span>
                  </span>
              </li>
              <!--<li>
                  <label  class="tit" for="filter-type">类型：</label>
                  <span class="ui-combo-wrap"  id="type">
                    <input type="text" name="filter-type" id="filter-type" class="input-txt" autocomplete="off" />
                    <span class="trigger"></span>
                  </span>
               </li>-->
            </ul>
            <div class="btns"> <a href="#" id="conditions-trigger" class="conditions-trigger" tabindex="-1">更多条件<b></b></a> <a class="ui-btn ui-btn-sp" id="filter-submit" href="#">确定</a> <a class="ui-btn" id="filter-reset" href="#" tabindex="-1">重置</a> </div>
          </div>
        </div>
        <a id="refresh" class="ui-btn ui-btn-refresh fl mrb"><b></b></a> <span class="txt fl" id="cur-search-tip"></span> </div>
      <div class="fr">
	  <!--<a href="#" class="ui-btn ui-btn-sp mrb fl" id="btn-print">打印</a>-->
	  <a href="#" class="ui-btn fl" id="btn-export"><?php echo showlang('common', 'common_export');?></a></div>
    </div>
  </div>
  <div class="grid-wrap">
    <table id="grid">
    </table>
    <div id="page"></div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/operationLog.js?2"></script>
</body>
</html>