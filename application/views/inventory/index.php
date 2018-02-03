<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>

<body class="min-w">
<div class="wrapper">
  <div class="mod-search cf">
    <div class="fl">
      <ul class="ul-inline cf">
        <li>
          <span id="storage"></span>
        </li>
        <li>
          <span id="category"></span>
        </li>
        <li>
          <label>商品:</label>
          <input type="text" id="goods" class="ui-input w200">
        </li>
        <li id="showZero">
          <label class="chk" style="margin-top:6px; " title="显示零库存"><input type="checkbox" name="box">零库存</label>
        </li>
        <li><a class="ui-btn ui-btn-sp mrb" id="search"><?php echo showlang('common', 'common_query');?></a></li>
      </ul>
    </div>
    <div class="fr dn">
        <a class="ui-btn mrb" id="export">导出系统库存</a>
		<!--<a class="ui-btn mrb" id="import">导入盘点库存</a>-->
		<a class="ui-btn" id="save">生成盘点单据</a>
    </div>
  </div>
  <div class="grid-wrap no-query">
    <table id="grid">
    </table>
    <!--<div id="page"></div>-->
  </div>
  <div style="margin:10px 18px 0 0; " class="dn"  id="handleDom">
    <div class="fl">
      <label>备注:</label>
      <input type="text" id="note" class="ui-input" style="width:560px;">
    </div>
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/inventory.js?2"></script>
</body>
</html>