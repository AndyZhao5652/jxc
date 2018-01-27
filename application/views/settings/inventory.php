<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

<style>
#matchCon { width: 240px; }
</style>
</head>

<body>
<div class="container" style="margin:20px 20px 0;">
  <div class="mod-search m0 cf" style="padding-right:0;">
    <div class="fl">
      <ul class="ul-inline">
        <li>
          <input type="text" id="matchCon" class="ui-input">
        </li>
        <li><a class="ui-btn mrb" id="search">查询</a><a class="ui-btn" id="refresh">刷新</a></li>
      </ul>
    </div>
  </div>
  <div class="grid-wrap">
    <table id="grid">
    </table>
    <div id="page"></div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/goodsInventory.js?2"></script>
</body>
</html>