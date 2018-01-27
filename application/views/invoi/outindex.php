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
          <input type="text" id="matchCon" class="ui-input ui-input-ph con" value="请输入单据号或客户名或备注">
        </li>
        <li>
          <label>日期:</label>
          <input type="text" id="beginDate" value="2014-08-30" class="ui-input ui-datepicker-input">
          <i>-</i>
          <input type="text" id="endDate" value="2014-09-05" class="ui-input ui-datepicker-input">
        </li>
        <li><!--<a class="mrb more" id="moreCon">(高级搜索)</a>--><a class="ui-btn mrb" id="search">查询</a></li>
      </ul>
    </div>
    <div class="fr"><a class="ui-btn ui-btn-sp" id="add">新增</a><!--<a class="ui-btn" id="export">导出</a>--></div>
  </div>
  <div class="grid-wrap">
    <table id="grid">
    </table>
    <div id="page"></div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/otherOutboundList.js?s22"></script>
</body>
</html>