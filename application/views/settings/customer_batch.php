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

<body>
<div class="container" style="margin:20px;">
  <div class="mod-search m0 cf">
    <div class="fl">
      <ul class="ul-inline">
        <li>
          <input type="text" id="matchCon" class="ui-input ui-input-ph" value="请输入客户编号或名称或联系人">
        </li>
        <li><a class="ui-btn mrb" id="search"><?php echo showlang('common', 'common_query');?></a><a class="ui-btn" id="refresh">刷新</a></li>
      </ul>
    </div>
  </div>
  <div class="grid-wrap">
    <table id="grid">
    </table>
    <div id="page"></div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/customerBatch.js?2"></script>
</body>
</html>

