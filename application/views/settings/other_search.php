<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>
<body style="background:#FFF; ">
<div class="wrapper">
  <div class="mod-search-adv">
    <ul>
      <li>
        <label>搜索条件:</label>
        <input type="text" id="matchCon" class="ui-input con" value="请输入单据号或客户名或备注">
      </li>
      <li>
        <label>日期:</label>
        <input type="text" id="beginDate" class="ui-input ui-datepicker-input">
        <i>至</i>
        <input type="text" id="endDate" class="ui-input ui-datepicker-input">
      </li>
      <li>
        <label>仓库:</label>
        <span id="storageA"></span>
      </li>
      <li>
        <label>业务类型:</label>
        <span id="transType"></span>
      </li>
    </ul>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/advSearch.js?23"></script>
</body>
</html>