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
  <div class="mod-toolbar-top mr0 cf dn" id="toolTop"></div>
  <div class="bills">
    <div class="con-header">
      <dl class="cf">
        <dd class="pct30">
          <label>客户：</label>
          <span class="ui-combo-wrap" id="customer">
          <input type="text" name="" class="input-txt" autocomplete="off" value="" data-ref="date">
          <i class="ui-icon-ellipsis"></i></span></dd>
        <dd class="pct25 tc">
          <label>单据日期：</label>
          <input type="text" id="date" class="ui-input ui-datepicker-input" value="">
        </dd>
        <dd id="identifier" class="pct25 tc">
          <label>单据编号：</label>
          <span id="number"></span></dd>
        <dd class="fr pct20 tr">
          <label>业务类别：</label>
          <span class="ui-combo-wrap" id="transType">
          <input type="text" name="" class="input-txt" autocomplete="off" value="">
          <i class="trigger"></i></span></dd>
      </dl>
    </div>
    <div class="grid-wrap">
      <table id="grid">
      </table>
      <div id="page"></div>
    </div>
    <div class="con-footer cf">
      <p>
        <label>备注:</label>
        <input type="text" id="note" class="ui-input" data-ref="discount">
      </p>
    </div>
    <div class="cf" id="bottomField">
    	<div class="fr" id="toolBottom"></div>
    	<div>
           <label>制单人:</label>
           <span id="userName"></span>
        </div>
    </div>
  </div>
  
  <div id="initCombo" class="dn">
    <input type="text" class="textbox goodsAuto" name="goods" autocomplete="off">
    <input type="text" class="textbox storageAuto" name="storage" autocomplete="off">
  </div>
  <div id="storageBox" class="shadow target_box dn">
  </div>
</div>
<script src="<?=skin_url()?>/js/dist/otherOutbound.js?21"></script>
</body>
</html>
